(function () {
    'use strict';

    let links = document.querySelectorAll('.nav_bar_nav li');

    links.forEach((el, i, links) => {
        if (el.children[0].href === window.location.href) {
            el.classList.add('current');
        } else {
            if (el.classList.contains('current')) {
                el.classList.remove('current');
            }
        }
    });

    let f = document.querySelector('.nav-bar-collapse');
    let m = document.querySelector('.main-menu');
    let g = false;
    m.addEventListener('click', () => {

        g = !g;

        if (g) {
            f.style.left = '100%'; f.style.opacity = '0';

        } else {
            f.style.opacity = '1';
            f.style.left = '121px';
        }

        console.log(g);
    })


})();