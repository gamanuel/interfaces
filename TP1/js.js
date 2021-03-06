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
    document.querySelector('#filterEdge').addEventListener('click', edge);
    document.querySelector('#filterSaturation').addEventListener('click', saturation);
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

    document.querySelector('#activeBrush').addEventListener('click', brushMethod);

    document.querySelector('#activeRubber').addEventListener('click', rubberMethod);

    CANVAS_COPY.addEventListener("mouseleave", function(event) {
        mouse = false;
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

    function brushMethod() {
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
    }

    function rubberMethod() {
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
    }

    function resetImage() {
        if (brush) {
            brushMethod();
        }
        if (rubber) {
            rubberMethod();
        }
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
                var scale = Math.min(CANVAS_COPY.width / image.width, CANVAS_COPY.height / image.height);
                var x = (CANVAS_COPY.width / 2) - (image.width / 2) * scale;
                var y = (CANVAS_COPY.height / 2) - (image.height / 2) * scale;
                CTX.drawImage(image, x, y, image.width * scale, image.height * scale);
                CTX_COPY.drawImage(image, x, y, image.width * scale, image.height * scale);
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

        const FILTER = [
            [1 / 9, 1 / 9, 1 / 9],
            [1 / 9, 1 / 9, 1 / 9],
            [1 / 9, 1 / 9, 1 / 9]
        ];

        buildMatrix(FILTER);

        selectedTool.innerHTML = 'Desenfoque';
    }

    function edge() {
        resetImage();
        black_white();
        const FILTER = [
            [-1, -1, -1],
            [-1, 8, -1],
            [-1, -1, -1]
        ];

        buildMatrix(FILTER);

        selectedTool.innerHTML = 'Bordes';
    }

    function buildMatrix(FILTER) {
        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                const r = Math.floor((getRed(x - 1, y - 1, imageData) * FILTER[0][0]) + (getRed(x - 1, y, imageData) * FILTER[1][0]) + (getRed(x - 1, y + 1, imageData) * FILTER[2][0]) + (getRed(x, y - 1, imageData) * FILTER[0][1]) + (getRed(x, y, imageData) * FILTER[1][1]) + (getRed(x, y + 1, imageData) * FILTER[2][1]) + (getRed(x + 1, y - 1, imageData) * FILTER[0][2]) + (getRed(x + 1, y, imageData) * FILTER[1][2]) + (getRed(x + 1, y + 1, imageData) * FILTER[2][2]));

                const g = Math.floor((getGreen(x - 1, y - 1, imageData) * FILTER[0][0]) + (getGreen(x - 1, y, imageData) * FILTER[1][0]) + (getGreen(x - 1, y + 1, imageData) * FILTER[2][0]) + (getGreen(x, y - 1, imageData) * FILTER[0][1]) + (getGreen(x, y, imageData) * FILTER[1][1]) + (getGreen(x, y + 1, imageData) * FILTER[2][1]) + (getGreen(x + 1, y - 1, imageData) * FILTER[0][2]) + (getGreen(x + 1, y, imageData) * FILTER[1][2]) + (getGreen(x + 1, y + 1, imageData) * FILTER[2][2]));

                const b = Math.floor((getBlue(x - 1, y - 1, imageData) * FILTER[0][0]) + (getBlue(x - 1, y, imageData) * FILTER[1][0]) + (getBlue(x - 1, y + 1, imageData) * FILTER[2][0]) + (getBlue(x, y - 1, imageData) * FILTER[0][1]) + (getBlue(x, y, imageData) * FILTER[1][1]) + (getBlue(x, y + 1, imageData) * FILTER[2][1]) + (getBlue(x + 1, y - 1, imageData) * FILTER[0][2]) + (getBlue(x + 1, y, imageData) * FILTER[1][2]) + (getBlue(x + 1, y + 1, imageData) * FILTER[2][2]));

                setPixel(imageData, x, y, r, g, b, TRANSPARENCY);
            }
        }
        CTX_COPY.putImageData(imageData, 0, 0);
        return;
    }

    function saturation() {
        resetImage();

        var r = 0;
        var g = 0;
        var b = 0;
        const brillo = 30;
        let pixel;
        for (let x = 0; x < image.width; x++) {
            for (let y = 0; y < image.height; y++) {
                r = getRed(x, y, imageData) + brillo;
                g = getGreen(x, y, imageData) + brillo;
                b = getBlue(x, y, imageData) + brillo;
                //Convertir image de RGB a HSV (Hue,Saturation,Value)
                pixel = rgbToHsv(r, g, b);
                //Convertir image de HSV a RGB (aumentando el valor de la Saturacion)
                pixel = hsvToRgb(pixel.h, 1, pixel.v);

                setPixel(imageData, x, y, pixel.r, pixel.g, pixel.b, TRANSPARENCY);
            }
        }
        selectedTool.innerHTML = 'Saturacion'

        CTX_COPY.putImageData(imageData, 0, 0);
        console.log('saturacion');
    }

    function rgbToHsv(r, g, b) {

        var h;
        var s;
        var v;

        var maxColor = Math.max(r, g, b);
        var minColor = Math.min(r, g, b);
        var delta = maxColor - minColor;

        if (delta == 0) {
            h = 0;
        } else if (r == maxColor) {
            h = (6 + (g - b) / delta) % 6;
        } else if (g == maxColor) {
            h = 2 + (b - r) / delta;
        } else if (b == maxColor) {
            h = 4 + (r - g) / delta;
        } else {
            h = 0;
        }
        h = h / 6;

        if (maxColor != 0) {
            s = delta / maxColor;
        } else {
            s = 0;
        }

        v = maxColor / 255;

        return { h: h, s: s, v: v };
    };

    function hsvToRgb(h, s, v) {
        var r, g, b, i, f, p, q, t;
        if (arguments.length === 1) {
            s = h.s, v = h.v, h = h.h;
        }
        i = Math.floor(h * 6);
        f = h * 6 - i;
        p = v * (1 - s);
        q = v * (1 - f * s);
        t = v * (1 - (1 - f) * s);
        switch (i % 6) {
            case 0:
                r = v, g = t, b = p;
                break;
            case 1:
                r = q, g = v, b = p;
                break;
            case 2:
                r = p, g = v, b = t;
                break;
            case 3:
                r = p, g = q, b = v;
                break;
            case 4:
                r = t, g = p, b = v;
                break;
            case 5:
                r = v, g = p, b = q;
                break;
        }
        return {
            r: Math.round(r * 255),
            g: Math.round(g * 255),
            b: Math.round(b * 255)
        };
    }





}