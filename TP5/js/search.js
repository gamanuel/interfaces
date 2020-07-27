'use strict';

document.addEventListener('DOMContentLoaded', function(event) {



    document.querySelector('#btnSearch').addEventListener('click', r => {
        if (document.querySelector('#searchInput').value) {
            location.href = 'search/' + document.querySelector('#searchInput').value;
        }
    });

    document.querySelectorAll('.btnFilter').forEach(r => {

        r.addEventListener('click', e => {
            console.log('hola');
            if (r.classList.contains('active-yellow')) {
                r.classList.remove('active-yellow');
            } else {
                r.classList.add('active-yellow');
            }

        })

    });

    if (document.querySelector('#searchInputValue')) {

        let songs = [{
                name: 'Hantystan',
                artist: 'Ignite',
                image: '0'
            },
            {
                name: 'The Way You Make Me Feel',
                artist: 'Michael Jackson',
                image: '1'
            },
            {
                name: 'Everything Everything',
                artist: 'Kemosabe',
                image: '2'
            },
            {
                name: 'Tumbando el Club',
                artist: 'Lucho SSJ, Duki, Ysy A',
                image: '9'
            },
            {
                name: 'This Town Ain´t Big Enough for Both of Us',
                artist: 'Sparks',
                image: '5'
            },
            {
                name: 'Lamp Lady',
                artist: 'Sevdaliza',
                image: '6'
            },
            {
                name: 'Never Know',
                artist: '6lack',
                image: '8'
            },
            {
                name: 'Nothing Else Matters',
                artist: 'Metallica',
                image: '4'
            }
        ]

        let playlist = [{
                name: 'Previa',
                songs: '204',
                date: '09-04-2020'
            },
            {
                name: 'Musica para gym',
                songs: '50',
                date: '01-08-2017'
            },
            {
                name: 'Cachengue',
                songs: '18',
                date: '10-04-2016'
            },
            {
                name: 'Tropical House',
                songs: '80',
                date: '04-05-2018'
            },
            {
                name: 'Deep House',
                songs: '18',
                date: '08-06-2020'
            },
            {
                name: 'Para la Oficina',
                songs: '99',
                date: '01-05-2020'
            },
            {
                name: 'Relajante',
                songs: '18',
                date: '01-05-2018'
            }
        ]
        let val = document.querySelector('#searchInputValue').value;
        let template = '';
        let cont = 0;
        for (const item of songs) {
            if ((item.name.toUpperCase().indexOf(val.toUpperCase()) > -1) || (item.artist.toUpperCase().indexOf(val.toUpperCase()) > -1)) {
                cont++;
                template += `
                <div class="col-lg-6">
                <div class="row   rounded text-white mt-2  mediaDetailRep bg-blue">
                    <div class="col-2 col-md-2  my-auto p-2">
                        <img src="images/songs/${item.image}.jpg" alt="" class="img-fluid imgMediaDetail rounded" srcset="">
                    </div>
                    <div class="col-6 col-md-6  my-auto mediaInfoRed pointer" data-id="${item.image}">
                        <p class="text-truncate">${item.name}</p>
                        <small>${item.artist}</small>
                    </div>
                    <div class="mostrarMobile col-md-2">
                    </div>
                    <div class="col-2 col-md-1 text-right my-auto playButton pointer" data-name="${item.name}" data-artist="${item.artist}" data-image="${item.image}">
                        <i class="fas  fa-play mx-2"></i>
                    </div>
                    <div class="col-2 col-md-1 text-center my-auto">
                        <i class="fas fa-ellipsis-v pointer"  data-toggle="dropdown"></i>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item addToPLaylist" href="#">Agregar a una playlist</a>
                        </div>
                    </div>
                </div>
            </div>
                `;
            }
        }
        let contP = 0;
        let templateP = '';
        for (const item of playlist) {
            if ((item.name.toUpperCase().indexOf(val.toUpperCase()) > -1)) {
                contP++;
                templateP += `
                <div class="col-lg-4">
                    <div class="row  bg-blue rounded text-white mt-2 mediaDetailRep">
                        <div class="col-8 col-md-8 mt-2 mb-2">
                            <div class="row">
                                <div class=" col-md-12 ">
                                    <h5 class="fontBold">${item.name}
                                        <h5>
                                </div>
                                <div class="col-md-12">
                                    <p>${item.songs} canciones</p>
                                </div>
                                <div class="col-md-12">
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                </div>
                                <div class="col-md-12">
                                    <small>${item.date}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 mt-2 text-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <i class="fas fa-ellipsis-v fa-1x "></i>
                                </div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-md-12">
                                    <i class="fas  fa-play fa-1x"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            }
        }

        let tempD = '';

        if (cont > 0) {
            tempD += ` <div class="col-md-12 mt-3 ">
            <h5 class="">Canciones <span class="">(${cont})</span></h5>
            </div>`;
            tempD += template;
            if (cont === 8) {
                tempD += '<div class="col-md-12 text-center mt-3 "><a href="" class="text-dark">Ver más</a></div>';
            }
        }
        if (contP > 0) {
            tempD += ` <div class="col-md-12 mt-3 ">
            <h5 class="">Playlists <span class="">(${contP})</span></h5>
            </div>`;
            tempD += templateP;
            if (contP === 8) {
                tempD += '<div class="col-md-12 text-center mt-3 "><a href="" class="text-dark">Ver más</a></div>';
            }
        }


        if ((cont > 0) || (contP > 0)) {
            document.querySelector('#searchContainer').innerHTML = tempD;
        } else {
            document.querySelector('#searchContainer').innerHTML = `  <div class="col-md-12 text-center mt-5">
            <h3><i class="far fa-2x fa-frown"></i></h3>
        </div>
        <div class="col-md-12 text-center mt-">
            <h5 class="text-blue">Lo sentimos, no encontramos lo que buscas</h5>
        </div>
        <div class="col-md-12 text-center mt-2">
            <a href="home-user" class="btn btn-blue">Volver a inicio</a>
        </div>`;
        }
    }



});