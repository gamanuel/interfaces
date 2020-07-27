'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    document.querySelectorAll('.faqsDiv').forEach(r => {
        r.addEventListener('click', e => {
            console.log('hola');
            let dataId = r.getAttribute('data-id');
            document.querySelectorAll('.arrowFAQS').forEach(l => {
                if (l.getAttribute('data-id') === dataId) {
                    if (l.classList.contains('fa-chevron-up')) {
                        l.classList.remove('fa-chevron-up');
                        l.classList.add('fa-chevron-down');
                    } else {
                        l.classList.remove('fa-chevron-down');
                        l.classList.add('fa-chevron-up');
                    }
                } else {
                    l.classList.remove('fa-chevron-down');
                    l.classList.remove('fa-chevron-up');
                    l.classList.add('fa-chevron-down');
                }
            });
        })
    });

});