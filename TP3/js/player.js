'use strict';

class Player {

    constructor() {
        this.position = 0;
        this.playerDiv = document.querySelector('#playerDivContainer');
    }

    setPosition(position) {
        this.position = position;
    }

    goUp(position) {
        this.setPosition(position);
    }

    goDown(position) {
        this.setPosition(position);
    }

    updateScreen() {
        this.playerDiv.style.top = this.position + 'px';
    }
}