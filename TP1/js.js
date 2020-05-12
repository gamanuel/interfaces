'use strict'

window.onload = function() {

    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    const canvasCopy = document.getElementById('canvasCopy');
    const ctxCopy = canvasCopy.getContext('2d');

    const transparencia = 255;

    let selectedTool = document.querySelector('#selectedTool');

    let image;
    let imageData;

    let red;
    let green;
    let blue;

    let brush = false;
    let rubber = false;
    let color;
    let mouse = false;
    let mouseX;
    let mouseY;

    //Descargar Imagen
    document.querySelector('#downloadCanvas').addEventListener('click', e => {
        document.querySelector('#downloadCanvas').href = canvasCopy.toDataURL('image/jpg');
    });

    canvasCopy.addEventListener('mousedown', r => {
        mouse = true;
        mouseX = event.offsetX;
        mouseY = event.offsetY;

    });

    canvasCopy.addEventListener('mouseup', r => {
        mouse = false;
    });

    canvasCopy.addEventListener('mousemove', r => {
        if (mouse) {
            draw();
        }
    });

    document.querySelector('#activeBrush').addEventListener('click', r => {
        ctxCopy.beginPath();
        ctxCopy.closePath();
        ctxCopy.stroke();
        brush = !brush;
        color = 'rgb(0, 0, 0)';
        if (rubber) {
            rubber = false;
        }
        if (brush) {
            selectedTool.innerHTML = 'Pincel'
            canvasCopy.style.cursor = "crosshair";
        } else {
            canvasCopy.style.cursor = "default";
        }
    });

    document.querySelector('#activeRubber').addEventListener('click', r => {
        ctxCopy.beginPath();
        ctxCopy.closePath();
        ctxCopy.stroke();
        rubber = !rubber;
        color = 'rgb(255, 255, 255)';
        if (brush) {
            brush = false;
        }
        if (rubber) {
            selectedTool.innerHTML = 'Goma de borrar'
            canvasCopy.style.cursor = "crosshair";
        } else {
            canvasCopy.style.cursor = "default";
        }
    });

    //Cargar Imagen a traves de input file
    document.querySelector('#canvasImage').addEventListener('change', r => {
        const FILE = document.querySelector('#canvasImage').files[0];
        const reader = new FileReader();

        if (FILE) {
            reader.readAsDataURL(FILE);
        } else {

        }

        reader.addEventListener("load", function() {
            image = new Image();
            image.src = reader.result;
            console.log(reader.result);
            image.onload = function() {
                ctx.drawImage(image, 0, 0);
                imageData = ctx.getImageData(0, 0, image.width, image.height);
                ctx.putImageData(imageData, 0, 0);
                ctxCopy.drawImage(image, 0, 0);
                resetImage();

            }
            document.querySelector('#thumbnailContainer').classList.remove('invisible');
            document.querySelectorAll('.btnFilters').forEach(b => {
                b.disabled = false;
            });

        }, false);
    });

    //Nuevo Canvas
    document.querySelector('#newCanvas').addEventListener('click', r => {
        document.querySelector('#canvasImage').value = "";
        ctxCopy.beginPath();
        ctxCopy.clearRect(0, 0, canvasCopy.width, canvasCopy.height);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        imageData = '';
        image = '';
        document.querySelectorAll('.btnFilters').forEach(b => {
            b.disabled = true;
        });
    });

    //Aumentar Brillo a la Imagen
    document.querySelector('#brillo').addEventListener('click', r => {
        var r = 0;
        var g = 0;
        var b = 0;
        const brillo = 30;
        var imageData = ctxCopy.getImageData(0, 0, image.height, image.width);
        console.log(imageData);
        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                r = getRed(x, y, imageData) + brillo;
                g = getGreen(x, y, imageData) + brillo;
                b = getBlue(x, y, imageData) + brillo;
                setPixel(imageData, x, y, r, g, b, transparencia);
            }
        }
        selectedTool.innerHTML = 'Brillo'

        ctxCopy.putImageData(imageData, 0, 0);
        console.log('brillo');
    });

    //Filtro - Foto original
    document.querySelector('#filterOriginal').addEventListener('click', r => {
        resetImage();
    });
    //Filtro - Blanco y Negro
    document.querySelector('#filterBlackAndWhite').addEventListener('click', r => {
        resetImage();

        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);

                const black_white = red * .3 + green * .59 + blue * .11;

                setPixel(imageData, x, y, black_white, black_white, black_white, transparencia);
            }
        }

        ctxCopy.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Blanco y Negro'

    });
    //Filtro - Binarizacion
    document.querySelector('#filterBinarization').addEventListener('click', r => {
        resetImage();

        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);

                let temp;

                if ((red + green + blue) < (255 / 2)) {
                    temp = 0;
                } else {
                    temp = 255;
                }


                setPixel(imageData, x, y, temp, temp, temp, transparencia);
            }
        }

        ctxCopy.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Binarizacion'

    });
    //Filtro - Sepia
    document.querySelector('#filterSepia').addEventListener('click', r => {
        resetImage();

        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);

                const redFilter = Math.floor(0.393 * red + 0.769 * green + 0.189 * blue);
                const greenFilter = Math.floor(0.349 * red + 0.686 * green + 0.168 * blue);
                const blueFilter = Math.floor(0.272 * red + 0.534 * green + 0.131 * blue);

                setPixel(imageData, x, y, redFilter, greenFilter, blueFilter, transparencia);
            }
        }

        ctxCopy.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Sepia'

    });
    //Filtro - Negativo
    document.querySelector('#filterNegative').addEventListener('click', r => {
        resetImage();

        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                red = 255 - getRed(x, y, imageData);
                green = 255 - getGreen(x, y, imageData);
                blue = 255 - getBlue(x, y, imageData);

                setPixel(imageData, x, y, red, green, blue, transparencia);
            }
        }

        ctxCopy.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Negativo'

    });




    //Cada ves que se llama a este metodo, se reemplaza la foto copia, por la original.
    function resetImage() {
        imageData = ctx.getImageData(0, 0, image.width, image.height);
        ctxCopy.putImageData(imageData, 0, 0);
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
            ctxCopy.moveTo(mouseX, mouseY);
            ctxCopy.lineTo(event.offsetX, event.offsetY);
            ctxCopy.lineWidth = 5;
            ctxCopy.strokeStyle = color;
            ctxCopy.stroke();

            mouseX = event.offsetX;
            mouseY = event.offsetY;
        } else {
            ctxCopy.closePath();
            ctxCopy.stroke();
        }
    }


    //Filtros

    function blur() {
        resetImage();

        for (let x = 0; x < image.height; x++) {
            for (let y = 0; y < image.width; y++) {
                red = getRed(x, y, imageData);
                green = getGreen(x, y, imageData);
                blue = getBlue(x, y, imageData);



                setPixel(imageData, x, y, redFilter, greenFilter, blueFilter, transparencia);
            }
        }

        ctxCopy.putImageData(imageData, 0, 0);
        selectedTool.innerHTML = 'Desenfoque'
    }






}