'use strict';

let widthScreen = screen.width * .8;
let heightScreen = screen.height * .8;

const CANVAS = document.querySelector('#canvas');
CANVAS.width = widthScreen;
CANVAS.height = heightScreen;
const CTX = CANVAS.getContext('2d');
let board;
let imgData;
initCanvas();

document.querySelector('#btnNewGame').addEventListener('click', r => {
    board.newGame();
    drawPlayerChips();
    redraw();
});

document.querySelector('#newGameWin').addEventListener('click', r => {
    $('#modalWinner').modal('hide');
    board.newGame();
    drawPlayerChips();
    redraw();
});

function initCanvas() {
    let image = new Image();
    image.src = "./img/background.webp";
    image.onload = function() {
        let scale = Math.max(CANVAS.width / image.width, CANVAS.height / image.height);
        let x = (CANVAS.width / 2) - (image.width / 2) * scale;
        let y = (CANVAS.height / 2) - (image.height / 2) * scale;
        CTX.drawImage(image, x, y, image.width * scale, image.height * scale);
        board = new Board(CTX);
        imgData = CTX.getImageData(0, 0, CANVAS.width, CANVAS.height);
        drawPlayerChips();
        detectClick();
    }
}

function detectClick() {

    CANVAS.addEventListener('mousedown', r => {
        board.dragging = true;

        for (let i = 0; i < board.chips.length; i++) {
            if (board.chips[i].player === board.turn) {
                let status = board.chips[i].hit(r.layerX, r.layerY);
                if (status) {
                    board.draggingId = i;
                    break;
                }
            }
        }
    });

    CANVAS.addEventListener('mouseup', r => {
        if ((board.dragging) && (board.draggingId != -1)) {
            checkBoardChip();
        }
        board.dragging = false;
        board.draggingId = -1;
    });

    CANVAS.addEventListener('mousemove', r => {
        if (board.draggingId != -1) {
            board.chips[board.draggingId].setPosition(r.layerX, r.layerY);
            redraw();
        }
    });

}

function redraw() {
    CTX.clearRect(0, 0, CANVAS.width, CANVAS.height);
    CTX.putImageData(imgData, 0, 0);
    CTX.fillStyle = "rgb(47, 67, 151)";
    CTX.fillRect(220, 87, 490, 470);

    for (let i = 0; i < board.board.length; i++) {
        for (let c = 0; c < board.board[i].length; c++) {
            board.board[i][c].drawChip();
        }
    }

    for (let i = 0; i < board.chips.length; i++) {
        if (board.draggingId !== i) {
            board.chips[i].drawChip();
        }
    }

    if (board.draggingId !== -1) {
        board.chips[board.draggingId].drawChip();
    }
}

function drawPlayerChips() {
    board.chips = [];
    let playerImg = new Image();
    playerImg.src = './img/player2.png';
    playerImg.onload = function() {
        for (let e = 0; e < 15; e++) {
            board.chips.push(new Chip(board.ratio, 'player1', 'rgb(192,42,27)', CTX, 80, 150 + (e * 20), playerImg));
        }


        let playerImg2 = new Image();
        playerImg2.src = './img/player1.png';
        playerImg2.onload = function() {
            for (let e = 0; e < 15; e++) {
                board.chips.push(new Chip(board.ratio, 'player2', 'rgb(239,205,35)', CTX, 900, 150 + (e * 20), playerImg2));
            }
            redraw();
        }.bind(this);
    }.bind(this);

}

function checkBoardChip() {

    let left = 0;
    let right = 0;
    if (board.chips[board.draggingId].y + board.chips[board.draggingId].ratio < 87) {
        for (let i = 0; i < board.board.length; i++) {
            left = Math.abs(board.board[i][0].ratio - board.board[i][0].x);
            right = Math.abs(board.board[i][0].ratio + board.board[i][0].x);
            if ((left < board.chips[board.draggingId].x) && (right > board.chips[board.draggingId].x)) {
                for (let e = 0; e < board.board[i].length; e++) {
                    if (board.board[i][e].enable) {
                        board.board[i][e].player = board.turn;
                        board.board[i][e].colour = board.chips[board.draggingId].colour;
                        board.board[i][e].enable = false;
                        board.board[i][e].img = board.chips[board.draggingId].img;
                        board.chips.splice(board.draggingId, 1);
                        if (board.checkWin()) {

                            $('#modalWinner').modal('show');
                            document.querySelector('#winner').innerHTML = 'Has ganado: ' + board.turn;
                        } else {
                            board.changeTurn();
                        }
                        redraw();
                        break;
                    }
                }
            }
        }
    }

}