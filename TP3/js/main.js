'use strict'


document.addEventListener("DOMContentLoaded", e => {
    let game = new Game();

    const btnStart = document.querySelector('#btnStart');

    btnStart.addEventListener('click', r => {
        game.initGame();
    })

});