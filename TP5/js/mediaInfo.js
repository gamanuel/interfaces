'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    let songs = [{
            name: 'Hantystan',
            artist: 'Ignite',
            image: '0',
            detail: 'Esta canción no posee ninguna descripcion.'
        },
        {
            name: 'The Way You Make Me Feel',
            artist: 'Michael Jackson',
            image: '1',
            detail: 'The Way You Make Me Feel» (en español: La forma en que me haces sentir) es una canción del artista estadounidense Michael Jackson, incluida en su séptimo álbum de estudio, Bad (1987). Fue lanzada como el tercer sencillo del álbum el 09 de noviembre de aquel año bajo el sello Epic. La canción fue escrita y compuesta por Jackson y producida por él y Quincy Jones. La canción recibió críticas positivas de los críticos contemporáneos.'
        },
        {
            name: 'Kemosabe',
            artist: 'Everything Everything',
            image: '2',
            detail: '"Kemosabe" es una canción de la banda de indie pop británica Everything Everything. La canción fue lanzada en el Reino Unido el 14 de enero de 2013 como el segundo sencillo del segundo álbum de estudio de la banda, Arc (2013). [2] La canción recibió su primera reproducción el 8 de noviembre de 2012, después de haber sido seleccionada como la grabación más popular del mundo de BBC Radio 1 DJ Zane Lowe. '
        },
        {
            name: 'Tumbando el Club',
            artist: 'Lucho SSJ, Duki, Ysy A',
            image: '9',
            detail: 'La canción llegó para coronar un movimiento trapero que se extiende a paso firme en todos los jóvenes en Argentina.'
        },
        {
            name: 'This Town Ain´t Big Enough for Both of Us',
            artist: 'Sparks',
            image: '5',
            detail: '"Esta ciudad no es lo suficientemente grande para los dos" es una canción escrita por Ron Mael del grupo pop estadounidense Sparks. Es la canción de apertura en su álbum de 1974 Kimono My House, y fue el sencillo principal del álbum, alcanzando el número 2 en la lista de singles del Reino Unido, donde permaneció durante dos semanas consecutivas. Esta canción se ha convertido en la más alta de las listas de Sparks en el Reino Unido, y se mantuvo fuera del primer lugar por la canción pop de chicle "Sugar Baby Love" de The Rubettes'
        },
        {
            name: 'Lamp Lady',
            artist: 'Sevdaliza',
            image: '6',
            detail: 'Esta canción no posee ninguna descripcion.'
        },
        {
            name: 'Never Know',
            artist: '6lack',
            image: '8',
            detail: 'Esta canción no posee ninguna descripcion.'
        },
        {
            name: 'Nothing Else Matters',
            artist: 'Metallica',
            image: '4',
            detail: 'Nothing Else Matters, (en español: Nada más importa ), es una balada grabada e interpretada por la banda estadounidense de thrash metal Metallica. Se publicó el 20 de abril de 1992 como el tercer sencillo del quinto álbum de estudio autotitulado Metallica (The Black Album) .'
        }
    ]

    let id = document.querySelector('#mediaId');
    const stars = document.querySelectorAll('.rateDesktop');
    let starRange = 1;

    for (const item of songs) {
        if (item.image === id.value) {
            document.querySelector('#imageMedia').src = 'images/songs/' + item.image + '.jpg';
            document.querySelector('#nameMedia').innerHTML = item.name;
            document.querySelector('#artistMedia').innerHTML = item.artist;
            document.querySelector('#songDetail').innerHTML = item.detail;
            break;
        }
    }

    document.querySelector('.starDivContainer').addEventListener('mouseleave', r => {
        stars.forEach(i => {
            i.classList.remove('text-yellow')

        });
    });

    document.querySelector('#publishOpinion').addEventListener('click', r => {
        if (document.querySelector('#opinionText').value !== '') {
            document.querySelector('#opinionText').classList.remove('is-invalid');
            let starContainer = ``;
            for (let index = 1; index <= 5; index++) {
                if (starRange < index) {
                    starContainer += '<i class="far text-dark d-inline fa-1x fa-star"></i>';
                } else {
                    starContainer += '<i class="fas text-dark d-inline fa-1x fa-star"></i>';

                }

            }

            document.querySelector('#opinionsDiv').innerHTML += ` <div class="col-md-6">
            <div class="card  mb-3">
                <div class="row no-gutters">
                    <div class="col-12 col-md-12">
                        <div class="card-body">
                            <h5 class="card-title"><img src="images/avatar/6.jpg"  class="card-img imagenCardUser rounded-pill mr-2"> Manuel Garcia Amaro</h5>
                            <p class="card-text text-truncate">${document.querySelector('#opinionText').value}</p>
                            <p class="card-text"><small class="text-muted"> 
                            ${starContainer}
                            </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

            stars.forEach(r => {


                r.classList.remove('text-yellow');
                r.classList.remove('starSelectedInfo');
                r.classList.remove('rotateAnimation');
                starRange = 1;
            });
            document.querySelector('#opinionText').value = '';
        } else {
            document.querySelector('#opinionText').classList.add('is-invalid');
        }



    });

    stars.forEach(r => {
        r.addEventListener('mouseover', t => {
            const hasta = r.getAttribute('data-id');
            stars.forEach(i => {
                i.classList.remove('text-yellow')

                if (r.getAttribute('data-id') >= starRange) {
                    if (hasta >= i.getAttribute('data-id')) {
                        i.classList.add('text-yellow');
                    }
                }
            });

        });
    });

    stars.forEach(r => {
        r.addEventListener('click', t => {
            starRange = parseInt(r.getAttribute('data-id'));
            stars.forEach(i => {
                i.classList.remove('starSelectedInfo');
                i.classList.remove('rotateAnimation');

                if (starRange >= i.getAttribute('data-id')) {
                    i.classList.add('starSelectedInfo');
                    i.classList.add('rotateAnimation');
                }
            });
            console.log(starRange);

        });
    });


});