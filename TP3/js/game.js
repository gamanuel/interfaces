class Game {

    constructor() {


        //Game assets
        this.player = new Player();
        this.coin = null;
        this.obstacles = [];
        this.score;
        this.goUp = false;
        this.interval;
        this.obstacles;

        //Aditional data
        this.body = document.querySelector('body');
        this.bodyHeight = window.getComputedStyle(this.body, null).getPropertyValue('height');
        this.bodyHeightClean = parseInt(this.bodyHeight.split('px')[0]);
        this.height = window.getComputedStyle(this.player.playerDiv, null).getPropertyValue('height');
        this.rest = this.bodyHeightClean - parseInt(this.height.split('px')[0]);


        //Menu elements
        this.menuDiv = document.querySelector('#menuDiv');
        this.scoreDiv = document.querySelector('#scoreInfo');
        this.rulesDiv = document.querySelector('#rulesDiv');

        this.audio;

    }

    initGame() {
        //Game sound
        this.audio = new Audio('sounds/forest.mp3');
        this.audio.play();

        //Game data
        this.menuDiv.style.display = 'none';
        this.rulesDiv.style.display = 'none';
        this.score = 0;

        //PLayer and Obstacle data
        this.player.setPosition();

        let higherObstacle;
        let lowerObstacle;

        higherObstacle = document.querySelector('.obstacle_02');
        lowerObstacle = document.querySelector('.obstacle_01');
        this.obstacles.push(new Obstacle(higherObstacle, lowerObstacle, 320, 90));
        higherObstacle = document.querySelector('.obstacle_04');
        lowerObstacle = document.querySelector('.obstacle_03');
        this.obstacles.push(new Obstacle(higherObstacle, lowerObstacle, 100, 220));
        higherObstacle = document.querySelector('.obstacle_06');
        lowerObstacle = document.querySelector('.obstacle_05');
        this.obstacles.push(new Obstacle(higherObstacle, lowerObstacle, 60, 340));

        this.coin = new Reward(document.querySelector('.coin-container'));

        //Key up event
        this.body.addEventListener('keyup', e => {
            if (e.keyCode === 38) {
                this.goUp = true;
            }
        });

        //Loop (Game functionality)
        this.interval = setInterval(e => {
            this.loop();
        }, 40);

    }

    loop() {

        let top = window.getComputedStyle(this.player.playerDiv, null).getPropertyValue("top");
        top = parseInt(top.split('px')[0]);

        if (this.goUp) {
            if ((top - 30) >= 0) {
                this.player.goUp(top - 30);
                this.goUp = false;
            } else {
                top = 0;
                this.goUp = false;
            }
        } else {

            if ((top + 20) <= this.rest) {
                this.player.goDown(top + 3);
            }
        }

        this.updateScreen();

        if (this.checkColition()) {
            this.player.die();
            this.endGame('Perdiste');
        }

        if (this.score >= 15) {
            this.endGame('Ganaste!')
        }

    }

    checkColition() {

        let playerLeft = this.player.playerDiv.offsetLeft;
        let playerTop = this.player.playerDiv.offsetTop;
        let playerHeight = this.player.playerDiv.offsetHeight;
        let playerWidth = this.player.playerDiv.offsetWidth;

        for (const obstacle of this.obstacles) {
            if ((obstacle.left <= playerLeft + playerWidth) && (obstacle.left + obstacle.width >= playerLeft)) {
                if ((obstacle.higherHeight >= playerTop) || ((playerTop + playerHeight) >= (this.bodyHeightClean - obstacle.lowerHeight))) {
                    return true;
                }
            }

            if ((obstacle.left + obstacle.width + 2 < playerLeft) && (obstacle.left + obstacle.width + 10 > playerLeft)) {
                this.score++;
                return false;
            }
        }

        if (this.coin.left <= playerLeft + playerWidth) {
            console.log(this.coin.element.offsetTop);
            console.log(playerTop);
            let coinTop = this.coin.element.offsetTop;
            let coinHeight = this.coin.element.offsetHeight
            if ((coinTop >= playerTop) && ((coinTop - coinHeight) <= playerTop)) {
                console.log('llego');
                this.score += 5;
                const sound = new Audio('sounds/coin.wav')
                sound.play();
                this.coin.element.style.display = 'none';
            }
        }

        return false;

    }

    updateScreen() {

        this.player.updateScreen();
        this.coin.updateScreen();
        for (const obstacle of this.obstacles) {
            obstacle.updateScreen();
        }

        this.scoreDiv.innerHTML = this.score;

    }

    endGame(message) {
        clearInterval(this.interval);
        this.audio.pause();
        this.menuDiv.style.display = 'block';
        this.rulesDiv.style.display = 'block';
        this.obstacles = [];
        this.goUp = false;
        setTimeout(e => {
            alert(message + ': ' + this.score);
            this.score = 0;
        }, 1000);


        this.updateScreen();
    }

}