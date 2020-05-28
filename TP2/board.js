'use strict';
class Board {

    constructor(idCanvas) {
        this.canvas = document.querySelector(idCanvas);
        this.ctx = this.canvas.getContext('2d');
        this.figures = [];
        this.player1 = new Player();
        this.player2 = new Player();
        this.ratio = 30;
        this.dragging = false;
        this.draggingId = -1;
        this.chips = [];
        this.turn = null;
        this.board = [
            [],
            [],
            [],
            [],
            [],
            [],
            []
        ];

        this.newGame();
        this.detectClick();

    }

    newGame() {
        for (var i = 0; i < this.board.length; i++) {
            for (var j = 0; j < 6; j++) {
                this.board[i][j] = new Chip(this.ratio, 'empty', 'rgb(255,255,255)', this.ctx, (255) + (70 * i), (500 - 35) - (68 * j));
            }
        }

        if (Math.floor(Math.random() * (2 - 1 + 1)) + 1 === 1) {
            this.turn = 'player1';
        } else {
            this.turn = 'player2';
        }
        console.log(this.turn);
        this.drawPlayerChips();
        this.redraw();
        console.log(this.board);

    }

    drawPlayerChips() {
        for (let e = 0; e < 15; e++) {
            this.chips.push(new Chip(this.ratio, 'player1', 'rgb(192,42,27)', this.ctx, 80, 150 + (e * 20)));
            this.chips.push(new Chip(this.ratio, 'player2', 'rgb(239,205,35)', this.ctx, 900, 150 + (e * 20)));
        }
    }

    changeTurn() {
        if (this.turn === 'player1') {
            this.turn = 'player2';
        } else {
            this.turn = 'player1';
        }
    }


    detectClick() {

        this.canvas.addEventListener('mousedown', r => {
            this.dragging = true;

            for (let i = 0; i < this.chips.length; i++) {
                if (this.chips[i].player === this.turn) {
                    let status = this.chips[i].hit(r.layerX, r.layerY);
                    if (status) {
                        this.draggingId = i;
                        console.log('le pegue');
                        break;
                    }
                }
            }
        });

        this.canvas.addEventListener('mouseup', r => {
            if ((this.dragging) && (this.draggingId != -1)) {
                this.checkBoardChip();
            }
            this.dragging = false;
            this.draggingId = -1;
        });

        this.canvas.addEventListener('mousemove', r => {
            if (this.draggingId != -1) {
                this.chips[this.draggingId].setPosition(r.layerX, r.layerY);
                this.redraw();
            }
        });

    }

    redraw() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.ctx.fillStyle = "rgb(47, 67, 151)";
        this.ctx.fillRect(220, 87, 490, 470);


        for (let i = 0; i < this.board.length; i++) {
            for (let c = 0; c < this.board[i].length; c++) {
                this.board[i][c].drawChip();
            }
        }

        for (let i = 0; i < this.chips.length; i++) {
            if (this.draggingId !== i) {
                this.chips[i].drawChip();
            }
        }

        if (this.draggingId !== -1) {
            this.chips[this.draggingId].drawChip();
        }
    }

    checkBoardChip() {
        console.log('entro');
        let left = 0;
        let right = 0;
        if (this.chips[this.draggingId].y + this.chips[this.draggingId].ratio < 87) {
            for (let i = 0; i < this.board.length; i++) {
                left = Math.abs(this.board[i][0].ratio - this.board[i][0].x);
                right = Math.abs(this.board[i][0].ratio + this.board[i][0].x);
                if ((left < this.chips[this.draggingId].x) && (right > this.chips[this.draggingId].x)) {
                    for (let e = 0; e < this.board[i].length; e++) {
                        if (this.board[i][e].enable) {
                            this.board[i][e].player = this.turn;
                            this.board[i][e].colour = this.chips[this.draggingId].colour;

                            /*   this.chips[this.draggingId].x = this.board[i][e].x;
                              this.chips[this.draggingId].y = this.board[i][e].y; */
                            this.board[i][e].enable = false;
                            this.chips.splice(this.draggingId, 1);
                            this.redraw();
                            this.changeTurn();
                            break;
                        }
                    }
                }
            }
            console.log('Altura bien');
        }
    }



}