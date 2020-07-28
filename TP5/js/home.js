'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    const btnLogin = document.querySelector('#btnLogin');
    const user = document.querySelector('#user');
    const password = document.querySelector('#password');
    const divAlert = document.querySelector('#alertContainer');

    btnLogin.addEventListener('click', r => {
        divAlert.innerHTML = '';
        user.classList.remove('is-invalid');
        password.classList.remove('is-invalid');
        if ((user.value === 'demo') && (password.value === '1234')) {
            btnLogin.innerHTML = '<div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>';
            setTimeout(r => {
                location.replace('home-user');
            }, 3000);
        } else {
            if (!user.classList.contains('is-invalid')) {
                user.classList.add('is-invalid');
            }
            if (!password.classList.contains('is-invalid')) {
                password.classList.add('is-invalid');
            }
            divAlert.innerHTML = '<div style="background-color:	#DC3545;" class="alert alert-danger text-white mb-4 p-0 border-0 col-12"  role="alert"><i class="fas fa-exclamation-circle"></i> Verifique los datos ingresados</div>';
        }
    });

});