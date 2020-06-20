'use strict';

class Reward {

    constructor(element) {
        this.element = element;
        this.element.style.display = 'block';
        this.left = left;
        this.setStyle();
    }

    setStyle() {
        this.element.style.left = Math.floor(Math.random() * 2000) + 600 + 'px';
    }

    updateScreen() {
        if (this.left <= -100) {
            this.element.style.display = 'block';
            this.left = Math.floor(Math.random() * 2000) + 1000;
        } else {
            this.left -= 9;
        }
        this.element.style.left = this.left + 'px';
    }

}