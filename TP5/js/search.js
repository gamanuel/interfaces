'use strict';

document.addEventListener('DOMContentLoaded', function(event) {

    document.querySelector('#btnSearch').addEventListener('click', r => {
        location.href = 'search/' + document.querySelector('#searchInput').value;
    });

});