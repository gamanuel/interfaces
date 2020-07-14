'use strict';

document.addEventListener('DOMContentLoaded', e => {

    const user = document.querySelector('#user');
    const password = document.querySelector('#password');
    const divStatus = document.querySelector('#statusContainer');
    const btnLogin = document.querySelector('#btnLogin');


    btnLogin.addEventListener('click', login);

    user.focus();

    user.addEventListener('keyup', r => {
        if (r.keyCode === 13) {
            password.focus();
        }
    });

    password.addEventListener('keyup', r => {
        if (r.keyCode === 13) {
            btnLogin.click();
        }
    });

    async function login() {

        btnLogin.innerHTML = '<div class="spinner-border spinner-border-sm" role="status"><span class="sr-only"> Loading... </span></div>';
        divStatus.innerHTML = '';

        if ((user.value !== '') && (password.value !== '')) {

            let data = new FormData();
            data.append('user', user.value);
            data.append('password', password.value);
            let response = await fetch('authentication', {
                method: 'POST',
                'Content-Type': 'multipart/form-data',
                body: data
            });

            response = await response.json();
            console.warn(response);

            if (response.status === 'success') {
                location.replace('home');
            } else {
                divStatus.innerHTML = '<div class="col-md-12"><div class="alert alert-danger" role="alert">Verifique los datos ingresados</div></div>';
                btnLogin.innerHTML = 'Iniciar Sesion';
            }

        } else {
            divStatus.innerHTML = '<div class="col-md-12"><div class="alert alert-danger" role="alert">Verifique los datos ingresados</div></div>';
            btnLogin.innerHTML = 'Iniciar Sesion';
        }


    }

});