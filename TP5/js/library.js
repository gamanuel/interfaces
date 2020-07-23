'use strict'

document.addEventListener('DOMContentLoaded', r => {

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

    if (document.querySelector('#musicContainer')) {
        let container = '';
        for (const item of songs) {
            container += `
            <div class="col-lg-6">
                <div class="row   rounded text-white mt-2 pointer mediaDetailRep bg-blue">
                    <div class="col-2 col-md-2  my-auto p-2">
                        <img src="images/songs/${item.image}.jpg" alt="" class="img-fluid imgMediaDetail rounded" srcset="">
                    </div>
                    <div class="col-5 col-md-6  my-auto">
                        <p class="text-truncate">${item.name}</p>
                        <small>${item.artist}</small>
                    </div>
                    <div class="col-1 col-md-2">
                    </div>
                    <div class="col-2 col-md-1 text-right my-auto">
                        <i class="fas  fa-play mx-2"></i>
                    </div>
                    <div class="col-2 col-md-1 text-center my-auto">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                </div>
            </div>
            `;
        }
        document.querySelector('#musicContainer').innerHTML = container;
    }






});