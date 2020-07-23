'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

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

    let id = document.querySelector('#mediaId');


    for (const item of songs) {
        if (item.image === id.value) {
            document.querySelector('#imageMedia').src = 'images/songs/' + item.image + '.jpg';
            document.querySelector('#nameMedia').innerHTML = item.name;
            document.querySelector('#artistMedia').innerHTML = item.artist;
            break;
        }
    }

});