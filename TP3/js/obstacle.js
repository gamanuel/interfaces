'use strict';

class Obstacle {

    constructor(higher, lower, topHeight, bottomHeight, left) {
        this.higher = higher;
        this.lower = lower;
        this.higherHeight = topHeight;
        this.lowerHeight = bottomHeight;
        this.width = 100;
        this.left = left;
        this.setStyle();
    }

    setStyle() {
        //this.left = Math.floor(Math.random() * 3000) + 1500;
        this.higher.style.left = this.left + 'px';
        this.lower.style.left = this.left + 'px';

        this.higher.style.width = this.width + 'px';
        this.lower.style.width = this.width + 'px';

        this.higher.style.height = this.higherHeight + 'px';
        this.lower.style.height = this.lowerHeight + 'px';
    }

    updateScreen() {
        if (this.left < -100) {
            this.left = 2200;
        } else {
            this.left -= 9;
        }

        this.higher.style.left = this.left + 'px';
        this.lower.style.left = this.left + 'px';
    }
}