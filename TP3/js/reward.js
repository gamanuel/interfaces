'use strict';

class Reward {

    constructor(element, top, left, bodyHeight) {
        this.element = element;
        this.element.style.display = 'block';
        this.left = left;
        this.originalLeft = this.left;
        this.bodyHeight = bodyHeight;
        this.setStyle();
    }

    setStyle() {
        this.element.style.left = this.left + 'px';
    }

    updateScreen() {
        if ((this.left - 1) <= (20)) {
            this.element.style.display = 'block';
            this.left = this.originalLeft;
        } else {
            this.left -= 9;
        }

        this.element.style.left = this.left + 'px';
    }

    restart() {
        this.left = this.originalLeft;
    }
}