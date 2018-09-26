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

        if (!g) {
            f.style.display = 'none';
        } else {
            f.style.display = 'block';
        }

        console.log(g);
    });

    function chengeResize() {
        window.onresize = function () {
            if (document.documentElement.clientWidth >= 704 && f.style.display === 'none') {
                f.style.display = '';
            }
        }.bind(this);
    }

    chengeResize();

})();