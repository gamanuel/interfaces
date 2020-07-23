'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    const player = document.querySelector('#player');
    const namePlayer = document.querySelectorAll('.mediaNamePlayer');
    const artistPlayer = document.querySelectorAll('.mediaArtistPlayer');
    const imagePlayer = document.querySelectorAll('.mediaImagePlayer');

    const stars = document.querySelectorAll('.rateDesktop');
    let starRange = 0;

    const btnLike = document.querySelector('#likeButton');
    const btnArrow = document.querySelector('#arrowOpenPlayer');
    document.querySelectorAll('.mediaDetail').forEach(r => {
        r.addEventListener('click', e => {
            location.href = 'media-info';
        });
    });

    document.querySelectorAll('.playButton').forEach(r => {
        r.addEventListener('click', e => {

            player.classList.remove('d-none');

            namePlayer.forEach(f => {
                f.innerHTML = r.getAttribute('data-name');
            });

            artistPlayer.forEach(f => {
                f.innerHTML = r.getAttribute('data-artist');
            });

            imagePlayer.forEach(f => {
                f.src = 'images/songs/' + r.getAttribute('data-image') + '.jpg';
            });





        })
    });

    stars.forEach(r => {
        r.addEventListener('mouseover', t => {
            const hasta = r.getAttribute('data-id');
            stars.forEach(i => {
                i.classList.remove('text-white')

                if (r.getAttribute('data-id') > starRange) {
                    if (hasta >= i.getAttribute('data-id')) {
                        i.classList.add('text-white');
                    }
                }
            });

        });
    });

    stars.forEach(r => {
        r.addEventListener('click', t => {
            starRange = parseInt(r.getAttribute('data-id'));
            stars.forEach(i => {
                i.classList.remove('starSelected');
                i.classList.remove('rotateAnimation');

                if (starRange >= i.getAttribute('data-id')) {
                    i.classList.add('starSelected');
                    i.classList.add('rotateAnimation');
                }
            });
            console.log(starRange);

        });
    });


    document.querySelector('.starDivContainer').addEventListener('mouseleave', r => {
        stars.forEach(i => {
            i.classList.remove('text-white')

        });
    });

    btnLike.addEventListener('click', r => {
        if (btnLike.classList.contains('text-black')) {
            btnLike.classList.remove('text-black');
            btnLike.classList.add('text-white');
            btnLike.classList.add('rotateAnimation');
        } else {
            btnLike.classList.remove('text-white');
            btnLike.classList.add('text-black');
            btnLike.classList.remove('rotateAnimation');
        }
    });

    btnArrow.addEventListener('click', r => {
        if (!btnArrow.classList.contains('rotateArrow')) {
            btnArrow.classList.add('rotateArrow');
        } else {
            btnArrow.classList.remove('rotateArrow');
        }
    });
});