'use strict'

window.onload = function() {

    let canvas = document.getElementById("myCanvas");
    let ctx = canvas.getContext("2d");
    let imgHeight = 0;
    let imgWidth = 0;
    let image = new Image();
    image.src = "image.png";

    console.log(image.src);

    image.onload = function() {

        let img = this;
        let canvas = ctx.canvas;
        let hRatio = canvas.width / img.width;
        let vRatio = canvas.height / img.height;
        let ratio = Math.min(hRatio, vRatio);
        let centerShift_x = (canvas.width - img.width * ratio) / 2;
        let centerShift_y = (canvas.height - img.height * ratio) / 2;

        ctx.drawImage(this, 0, 0, img.width, img.height,
            centerShift_x, centerShift_y, img.width * ratio, img.height * ratio);

        let imageData = ctx.getImageData(0, 0, 400, 400);
        let px = imageData.data;
        let lenght = px.length;
        /* console.log(imageData);
        console.log(px);
        console.log(lenght); */

        //Recorre cada pixel y le modifica los valores rgb
        /*   for (let i = 0; i < lenght; i += 4) {
              let redPx = px[i];
              let greenPx = px[i + 1];
              let bluePx = px[i + 2];

              let grey = redPx * .3 + greenPx * .59 + bluePx * .11;

              px[i] = grey;
              px[i + 1] = grey;
              px[i + 2] = grey;
          } */
        //console.log(px);
        ctx.putImageData(imageData, 0, 0);
    };

    document.querySelector("#brillo").addEventListener("click", r => {
        var r = 0;
        var g = 0;
        var b = 0;
        const brillo = 30;
        var imageData = ctx.getImageData(0, 0, image.height, image.width);
        console.log(imageData);
        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                r = getRed(x, y, imageData) + brillo;
                g = getGreen(x, y, imageData) + brillo;
                b = getBlue(x, y, imageData) + brillo;
                setPixel(imageData, x, y, r, g, b, 255);
            }
        }

        ctx.putImageData(imageData, 0, 0);
        console.log('brillo');
    });

    function getRed(x, y, imageData) {
        let index = (x + y * imageData.width) * 4;
        return imageData.data[index + 0];
    }

    function getGreen(x, y, imageData) {
        let index = (x + y * imageData.width) * 4;
        return imageData.data[index + 1];
    }

    function getBlue(x, y, imageData) {
        let index = (x + y * imageData.width) * 4;
        return imageData.data[index + 2];
    }



    function setPixel(imageData, x, y, r, g, b, a) {
        let index = (x + y * imageData.width) * 4;
        imageData.data[index + 0] = r;
        imageData.data[index + 1] = g;
        imageData.data[index + 2] = b;
        imageData.data[index + 3] = a;
    }
}






























// El evento DOMContentLoaded se desencadena cuando 
// el documento HTML inicial se ha cargado y analizado por completo, 
// sin esperar a que las hojas de estilo, las imágenes y los subtramas 
// terminen de cargarse.
//window.addEventListener('DOMContentLoaded', (event) => {

//});