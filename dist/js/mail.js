(function () {
    'use strict';
    let btnMail = document.forms.sendMail;
    if (btnMail) {
        btnMail.addEventListener('submit', function (event) {
            event.preventDefault();
            let param = 'name=' + btnMail.name.value + '&phone=' + btnMail.phone.value + '&mail=' + btnMail.mail.value + '&discription=' + btnMail.discription.value;
            postRequest('/send_mail/', param).then(result => {
                if (result == 1) {
                    let div = document.createElement('div');
                    div.classList.add('thank_mail');
                    let div2 = document.createElement('div');
                    div2.textContent = 'Сообщение отправленно в ближайшее время мы Вам перезвоним';
                    div2.classList.add('send_mail');
                    div.appendChild(div2);
                    document.body.insertBefore(div, document.body.children[0]);
                    setTimeout(() => {
                        document.querySelector('.send_mail').remove();
                        document.querySelector('.thank_mail').remove();
                        window.location = '/';
                    }, 2500);
                }
            })
        })
    }


    function postRequest(url, params) {
        return new Promise(function (resolve, reject) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            xhr.onload = function () {
                if (this.status === 200) {
                    resolve(this.response);
                } else {
                    let error = new Error(this.statusText);
                    error.code = this.status;
                    reject(error);
                }
            };
            xhr.onerror = function () {
                reject(new Error("Error"));
            };
            xhr.send(params);
        });
    }
})();