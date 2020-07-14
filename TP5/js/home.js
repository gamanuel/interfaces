'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    const btnLogin = document.querySelector('#btnLogin');
    const user = document.querySelector('#user');
    const password = document.querySelector('#password');
    const divAlert = document.querySelector('#alertContainer');

    btnLogin.addEventListener('click', r => {
        divAlert.innerHTML = '';
        if ((user.value === 'demo') && (password.value === '1234')) {
            btnLogin.innerHTML = '<div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>';
            setTimeout(r => {
                location.replace('home-user');
            }, 3000);
        } else {
            divAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> Verifique los datos ingresados';
        }
    });

});