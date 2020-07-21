'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    const stars = document.querySelectorAll('.rateDesktop');
    let starRange = 0;

    document.querySelectorAll('.mediaDetail').forEach(r => {
        r.addEventListener('click', e => {
            location.href = 'media-info';
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
                i.classList.remove('starSelected')
                if (starRange >= i.getAttribute('data-id')) {
                    i.classList.add('starSelected');
                }
            });
            console.log(starRange);

        });
    });


    document.querySelector('.starDivContainer').addEventListener('mouseleave', r => {
        stars.forEach(i => {
            i.classList.remove('text-white')

        });
    })
});