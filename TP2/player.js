class Player {

    constructor() {
        this.chips = []
    }

    newGame() {
        for (let i = 0; i < 8; i++) {
            this.chips.push(new Chip())
        }
    }
}