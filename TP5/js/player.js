'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    const stars = document.querySelectorAll('.rateDesktop');

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
                if (hasta >= i.getAttribute('data-id')) {
                    i.classList.add('text-white');
                }
            });

        });
    });

    document.querySelector('.starDivContainer').addEventListener('mouseleave', r => {
        stars.forEach(i => {
            i.classList.remove('text-white')

        });
    })
});