'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    let mediaSelected = '';

    const player = document.querySelector('#player');
    const namePlayer = document.querySelectorAll('.mediaNamePlayer');
    const artistPlayer = document.querySelectorAll('.mediaArtistPlayer');
    const imagePlayer = document.querySelectorAll('.mediaImagePlayer');

    const stars = document.querySelectorAll('.rateDesktop');
    let starRange = 0;

    const btnLike = document.querySelectorAll('.likeButton');
    const btnArrow = document.querySelector('#arrowOpenPlayer');
    document.querySelectorAll('.mediaDetail').forEach(r => {
        r.addEventListener('click', e => {
            location.href = 'media-info/' + mediaSelected;
        });
    });

    const btnPlay = document.querySelectorAll('.playBtnChange');

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
                mediaSelected = r.getAttribute('data-image');
            });


            btnPlay.forEach(p => {
                if (p.classList.contains('fa-play')) {
                    p.classList.remove('fa-play');
                    p.classList.add('fa-pause');
                } else {

                }

            });

        })
    });

    btnPlay.forEach(r => {
        r.addEventListener('click', e => {
            if (r.classList.contains('fa-play')) {
                r.classList.remove('fa-play');
                r.classList.add('fa-pause');
            } else {
                r.classList.add('fa-play');
                r.classList.remove('fa-pause');
            }
        });
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

    document.querySelectorAll('.closePlayer').forEach(r => {
        r.addEventListener('click', e => {
            player.classList.add('d-none');
            if (r.classList.contains('fa-play')) {} else {
                r.classList.add('fa-play');
                r.classList.remove('fa-pause');
            }
        });

    });

    btnLike.forEach(r => {
        r.addEventListener('click', e => {
            if (r.classList.contains('Mobile')) {
                console.log('toque');
                if (r.classList.contains('text-white')) {
                    r.classList.remove('text-white');
                    r.classList.add('rotateAnimation');
                    r.classList.add('text-yellow');
                } else {
                    r.classList.remove('text-yellow');
                    r.classList.add('text-white');
                    r.classList.remove('rotateAnimation');
                }
            } else {
                if (r.classList.contains('text-black')) {
                    r.classList.remove('text-black');
                    r.classList.add('text-white');
                    r.classList.add('rotateAnimation');
                } else {
                    r.classList.remove('text-white');
                    r.classList.add('text-black');
                    r.classList.remove('rotateAnimation');
                }
            }
        });
    })

    btnArrow.addEventListener('click', r => {
        if (!btnArrow.classList.contains('rotateArrow')) {
            btnArrow.classList.add('rotateArrow');
        } else {
            btnArrow.classList.remove('rotateArrow');
        }
    });
});