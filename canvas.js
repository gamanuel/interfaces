/* function calculateIsIn(x, y, radius, center_x, center_y) {
    if ((x - center_x) ^ 2 + (y - center_y) ^ 2 < (radius ^ 2)) {
        return true;
    }
    return false;
}

console.log(calculateIsIn(200, 200, 100, 0, 0)); */

class Canvas {

    constructor(idCanvas) {
        this.canvas = document.querySelector(idCanvas);
        this.arr = [];
        this.drag = false;
    }

    insertFigure() {

    }

}