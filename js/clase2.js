let canvas = document.getElementById("myCanvas");
let ctx = canvas.getContext("2d");
/*let width = canvas.width;
let imageData = ctx.createImageData(width, height);
let height = canvas.height;

let x = 0;
let y = 0;
let r = 255;
let g = 0;
let b = 255;
let a = 255;

drawRect(imageData, r, g, b, a);
ctx.putImageData(imageData, x, y);

function drawRect(imageData, r, g, b, a) {
    for (let x = 0; x < width; x++) {
        let coeficiente = 255 / width;
        if (x <= width / 2) {
            r = x + coeficiente;
            g = x + coeficiente;
            b = 0;
        } else {
            r = x;
            g = width - x;
            b = 0;
        }

        for (let y = 0; y < height; y++) {
            setPixel(imageData, x, y, r, g, b, a);
        }
    }
}

function setPixel(imageData, x, y, r, g, b, a) {
    let index = (x + y * imageData.width) * 4;
    imageData.data[index + 0] = r;
    imageData.data[index + 1] = g;
    imageData.data[index + 2] = b;
    imageData.data[index + 3] = a;
} */

const image = new Image();
image.src = "image.png";

console.log(image.src);

image.onload = () => {
    drawImage(this);
};

function drawImage(img) {
    ctx.drawImage(img, 0, 0);
}





























// El evento DOMContentLoaded se desencadena cuando 
// el documento HTML inicial se ha cargado y analizado por completo, 
// sin esperar a que las hojas de estilo, las imágenes y los subtramas 
// terminen de cargarse.
//window.addEventListener('DOMContentLoaded', (event) => {

//});