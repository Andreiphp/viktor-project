(function () {
    'use strict';

    const wrapper = document.querySelector('.header');
    const bars = Array.from(document.querySelectorAll('.m-image__bar'));


   setInterval(()=>{
       bars.forEach((bar) => {
           bar.classList.remove('flipInY');
           bar.classList.remove('animated');
           setTimeout(() => {
               bar.classList.add('flipInY');
               bar.classList.add('animated');
           }, 400);
       });
   },3000);


})();