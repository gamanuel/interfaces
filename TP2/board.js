'use strict';
class Board {

    constructor(ctx) {
        this.ctx = ctx;
        this.figures = [];
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
        this.turnView = document.querySelector('#actualTurn');
        this.newGame();
    }

    newGame() {
        this.dragging = false;
        this.draggingId = -1;
        for (var i = 0; i < this.board.length; i++) {
            for (var j = 0; j < 6; j++) {
                this.board[i][j] = new Chip(this.ratio, 'empty', 'rgb(255,255,255)', this.ctx, (255) + (70 * i), (500 - 35) - (68 * j), false);
            }
        }

        if (Math.floor(Math.random() * (2 - 1 + 1)) + 1 === 1) {
            this.turn = 'player1';
        } else {
            this.turn = 'player2';
        }

        this.turnView.innerHTML = this.turn.toUpperCase();
        // this.drawPlayerChips();
    }

    changeTurn() {
        if (this.turn === 'player1') {
            this.turn = 'player2';
        } else {
            this.turn = 'player1';
        }
        this.turnView.innerHTML = this.turn.toUpperCase();
    }

    checkWin() {

        //Vertical

        for (let i = 0; i < this.board.length; i++) {
            for (let j = 0; j < this.board[0].length - 3; j++) {
                if ((this.board[i][j].player == this.turn) && (this.board[i][j + 1].player == this.turn) && (this.board[i][j + 2].player == this.turn) && (this.board[i][j + 3].player == this.turn)) {
                    return true;
                }
            }
        }

        //Horizontal

        for (let i = 0; i < this.board.length - 3; i++) {
            for (let j = 0; j < this.board[0].length; j++) {
                if ((this.board[i][j].player == this.turn) && (this.board[i + 1][j].player == this.turn) && (this.board[i + 2][j].player == this.turn) && (this.board[i + 3][j].player == this.turn)) {
                    return true;
                }
            }
        }

        // Diagonal  

        for (let i = 3; i < this.board.length; i++) {
            for (let j = 0; j < this.board[0].length - 3; j++) {
                if ((this.board[i][j].player == this.turn) && (this.board[i - 1][j + 1].player == this.turn) && (this.board[i - 2][j + 2].player == this.turn) && (this.board[i - 3][j + 3].player == this.turn)) {
                    return true;
                }
            }
        }

        for (let i = 3; i < this.board.length; i++) {
            for (let j = 3; j < this.board[0].length; j++) {
                if ((this.board[i][j].player == this.turn) && (this.board[i - 1][j - 1].player == this.turn) && (this.board[i - 2][j - 2].player == this.turn) && (this.board[i - 3][j - 3].player == this.turn)) {
                    return true;
                }

            }
        }

        return false;
    }



}