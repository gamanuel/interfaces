class Chip {
    constructor(ratio, player, colour, ctx, x, y) {
        this.ctx = ctx;
        this.player = player;
        this.ratio = ratio;
        this.colour = colour;
        this.x = x;
        this.y = y;
        this.enable = true;
    }

    setPosition(x, y) {
        this.x = x;
        this.y = y;

    }

    drawChip() {
        this.ctx.beginPath();
        this.ctx.fillStyle = this.colour;
        this.ctx.arc(this.x, this.y, this.ratio, 0, Math.PI * 2);
        this.ctx.stroke();
        this.ctx.fill();
        this.ctx.closePath();
    }

    hit(x, y) {
        let temp = false;
        let m = Math.pow(x - this.x, 2) + Math.pow(y - this.y, 2);
        return m < Math.pow(this.ratio, 2);
    }


}