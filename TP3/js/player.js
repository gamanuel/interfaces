'use strict';

class Player {

    constructor() {
        this.position = 250;
        this.playerDiv = document.querySelector('#playerDivContainer');
        this.player = document.querySelector('.player');
    }

    setPosition(position) {
        this.position = position;
    }

    goUp(position) {
        this.player.classList.remove('explosion');
        this.player.classList.remove('player');
        this.player.classList.add('playerUp');
        this.setPosition(position);
    }

    goDown(position) {
        this.player.classList.remove('explosion');
        this.player.classList.remove('playerUp');
        this.player.classList.add('player');
        this.setPosition(position);
    }

    die() {
        this.player.classList.remove('playerUp');
        this.player.classList.remove('player');
        this.player.classList.add('explosion');
    }

    updateScreen() {
        this.playerDiv.style.top = this.position + 'px';
    }
}