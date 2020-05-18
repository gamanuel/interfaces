'use strict'

window.onload = function() {

    //constants
    const CANVAS = document.getElementById('canvas');
    const CTX = CANVAS.getContext('2d');
    const CANVAS_COPY = document.getElementById('canvasCopy');
    const CTX_COPY = CANVAS_COPY.getContext('2d');
    const TRANSPARENCY = 255;

    let selectedTool = document.querySelector('#selectedTool');
    let image;
    let imageData;

    //rgb
    let red;
    let green;
    let blue;
    //mouse events
    let brush = false;
    let rubber = false;
    let color;
    let mouse = false;
    let mouseX;
    let mouseY;

    //buttons
    //  filters
    document.querySelector('#filterOriginal').addEventListener('click', resetImage);
    document.querySelector('#filterBlackAndWhite').addEventListener('click', black_white);
    document.querySelector('#filterBinarization').addEventListener('click', binarization);
    document.querySelector('#filterSepia').addEventListener('click', sepia);
    document.querySelector('#filterNegative').addEventListener('click', negative);
    document.querySelector('#filterBlur').addEventListener('click', blur);
    document.querySelector('#brillo').addEventListener('click', brightness);
    //  new canvas && upload image
    document.querySelector('#newCanvas').addEventListener('click', newCanvas);
    document.querySelector('#canvasImage').addEventListener('change', uploadImage);
    //  download canvas
    document.querySelector('#downloadCanvas').addEventListener('click', e => {
        document.querySelector('#downloadCanvas').href = CANVAS_COPY.toDataURL('image/jpg');
    });

    //Functions

    CANVAS_COPY.addEventListener('mousedown', r => {
        mouse = true;
        mouseX = event.offsetX;
        mouseY = event.offsetY;

    });

    CANVAS_COPY.addEventListener('mouseup', r => {
        mouse = false;
    });

    CANVAS_COPY.addEventListener('mousemove', r => {
        if (mouse) {
            draw();
        }
    });

    document.querySelector('#activeBrush').addEventListener('click', r => {
        CTX_COPY.beginPath();
        CTX_COPY.closePath();
        CTX_COPY.stroke();
        brush = !brush;
        color = 'rgb(0, 0, 0)';
        if (rubber) {
            rubber = false;
        }
        if (brush) {
            selectedTool.innerHTML = 'Lapiz'
            CANVAS_COPY.style.cursor = "crosshair";
        } else {
            CANVAS_COPY.style.cursor = "default";
        }
    });

    document.querySelector('#activeRubber').addEventListener('click', r => {
        CTX_COPY.beginPath();
        CTX_COPY.closePath();
        CTX_COPY.stroke();
        rubber = !rubber;
        color = 'rgb(255, 255, 255)';
        if (brush) {
            brush = false;
        }
        if (rubber) {
            selectedTool.innerHTML = 'Goma de borrar'
            CANVAS_COPY.style.cursor = "crosshair";
        } else {
            CANVAS_COPY.style.cursor = "default";
        }
    });

    function newCanvas() {
        document.querySelector('#canvasImage').value = "";
        CTX_COPY.beginPath();
        CTX_COPY.clearRect(0, 0, CANVAS_COPY.width, CANVAS_COPY.height);
        CTX.clearRect(0, 0, CANVAS.width, CANVAS.height);
        imageData = '';
        image = '';
        document.querySelectorAll('.btnFilters').forEach(b => {
            b.disabled = true;
        });
    }

    function resetImage() {
        imageData = CTX.getImageData(0, 0, image.width, image.height);
        CTX_COPY.putImageData(imageData, 0, 0);
    }

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

    function draw() {
        if ((brush) || (rubber)) {
            CTX_COPY.moveTo(mouseX, mouseY);
            CTX_COPY.lineTo(event.offsetX, event.offsetY);
            CTX_COPY.lineWidth = 5;
            CTX_COPY.strokeStyle = color;
            CTX_COPY.stroke();

            mouseX = event.offsetX;
            mouseY = event.offsetY;
        } else {
            CTX_COPY.closePath();
            CTX_COPY.stroke();
        }
    }

    function uploadImage() {
        const FILE = document.querySelector('#canvasImage').files[0];
        const reader = new FileReader();

        if (FILE) {
            reader.readAsDataURL(FILE);
        } else {

        }
        newCanvas();

        reader.addEventListener("load", function() {
            image = new Image();
            image.src = reader.result;
            console.log(reader.result);
            image.onload = function() {
                CTX.drawImage(image, 0, 0);
                CTX_COPY.drawImage(image, 0, 0);
                imageData = CTX.getImageData(0, 0, image.width, image.height);
                CTX.putImageData(imageData, 0, 0);
                resetImage();
            }
            document.querySelector('#thumbnailContainer').classList.remove('invisible');
            document.querySelectorAll('.btnFilters').forEach(b => {
                b.disabled = false;
            });

        }, false);
    }

    function sepia() {
        resetImage();

        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);

                const redFilter = Math.floor(0.393 * red + 0.769 * green + 0.189 * blue);
                const greenFilter = Math.floor(0.349 * red + 0.686 * green + 0.168 * blue);
                const blueFilter = Math.floor(0.272 * red + 0.534 * green + 0.131 * blue);

                setPixel(imageData, x, y, redFilter, greenFilter, blueFilter, TRANSPARENCY);
            }
        }

        CTX_COPY.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Sepia'
    }

    function black_white() {
        resetImage();

        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);

                const black_white = red * .3 + green * .59 + blue * .11;

                setPixel(imageData, x, y, black_white, black_white, black_white, TRANSPARENCY);
            }
        }

        CTX_COPY.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Blanco y Negro'

    }

    function negative() {
        resetImage();

        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                red = 255 - getRed(x, y, imageData);
                green = 255 - getGreen(x, y, imageData);
                blue = 255 - getBlue(x, y, imageData);

                setPixel(imageData, x, y, red, green, blue, TRANSPARENCY);
            }
        }

        CTX_COPY.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Negativo'
    }

    function binarization() {
        resetImage();

        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);

                let temp;

                if ((red + green + blue) < (255 / 2)) {
                    temp = 0;
                } else {
                    temp = 255;
                }


                setPixel(imageData, x, y, temp, temp, temp, TRANSPARENCY);
            }
        }

        CTX_COPY.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Binarizacion'
    }

    function brightness() {
        var r = 0;
        var g = 0;
        var b = 0;
        const brillo = 30;
        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                r = getRed(x, y, imageData) + brillo;
                g = getGreen(x, y, imageData) + brillo;
                b = getBlue(x, y, imageData) + brillo;
                setPixel(imageData, x, y, r, g, b, TRANSPARENCY);
            }
        }
        selectedTool.innerHTML = 'Brillo'

        CTX_COPY.putImageData(imageData, 0, 0);
        console.log('brillo');
    }

    function blur() {
        resetImage();

        const FILTER = 1 / 9;

        for (let x = 0; x < image.width - 1; x++) {
            for (let y = 0; y < image.height - 1; y++) {
                const pixel_1_1 = getPixel(imageData, x - 1, y - 1);
                const pixel_1_2 = getPixel(imageData, x - 1, y);
                const pixel_1_3 = getPixel(imageData, x - 1, y + 1);
                const pixel_2_1 = getPixel(imageData, x, y - 1);
                const pixel_2_2 = getPixel(imageData, x, y);
                const pixel_2_3 = getPixel(imageData, x, y + 1);
                const pixel_3_1 = getPixel(imageData, x + 1, y - 1);
                const pixel_3_2 = getPixel(imageData, x + 1, y);
                const pixel_3_3 = getPixel(imageData, x + 1, y + 1);

                const r = Math.floor((pixel_1_1[0] * FILTER) + (pixel_1_2[0] * FILTER) + (pixel_1_3[0] * FILTER) + (pixel_2_1[0] * FILTER) + (pixel_2_2[0] * FILTER) + (pixel_2_3[0] * FILTER) + (pixel_3_1[0] * FILTER) + (pixel_3_2[0] * FILTER) + (pixel_3_3[0] * FILTER));

                const g = Math.floor((pixel_1_1[1] * FILTER) + (pixel_1_2[1] * FILTER) + (pixel_1_3[1] * FILTER) + (pixel_2_1[1] * FILTER) + (pixel_2_2[1] * FILTER) + (pixel_2_3[1] * FILTER) + (pixel_3_1[1] * FILTER) + (pixel_3_2[1] * FILTER) + (pixel_3_3[1] * FILTER));

                const b = Math.floor((pixel_1_1[2] * FILTER) + (pixel_1_2[2] * FILTER) + (pixel_1_3[2] * FILTER) + (pixel_2_1[2] * FILTER) + (pixel_2_2[2] * FILTER) + (pixel_2_3[2] * FILTER) + (pixel_3_1[2] * FILTER) + (pixel_3_2[2] * FILTER) + (pixel_3_3[2] * FILTER));

                setPixel(imageData, x, y, r, g, b, TRANSPARENCY);
            }
        }
        CTX_COPY.putImageData(imageData, 0, 0);

        selectedTool.innerHTML = 'Desenfoque';
    }

    function getPixel(imageData, x, y) {
        let index = (x + y * imageData.width) * 4;
        let r = imageData.data[index + 0];
        let g = imageData.data[index + 1];
        let b = imageData.data[index + 2];
        let a = TRANSPARENCY;
        return [r, g, b, a];
    }


}