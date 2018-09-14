'use strict';
(function () {
    showFormCommit();

    function showFormCommit() {
        let form = document.getElementById('form_1');
        let btn = document.getElementById('show_form');
        if (btn) {
            btn.addEventListener('click', function (event) {
                if (form.style.display === 'block') {
                    form.style.display = 'none';
                    btn.textContent = 'Добавить отзыв';
                } else {
                    form.style.display = 'block';
                    btn.textContent = 'Скрыть форму';
                }
            });
        }
    }

    getComments();
    let commentBlock = document.querySelector('.toComments');

    function getComments() {
        let param = 'start=' + 0;
        postRequest('/comment/get_comments/', param).then(result => {
            let comments = JSON.parse(result);
            let res = '';
            comments.forEach(function (el) {
                res += templateComment(el.img, el.user_name, el.date, el.discription, el.job);
            });
            return res;
        }).then(res => {
            if (commentBlock) {
                commentBlock.insertAdjacentHTML('beforeEnd', res);
            }
        });
    }

    let btnLoad = document.getElementById('load_commit');
    ajaxLoadComments();

    function ajaxLoadComments() {
        let start = 0;
        let param;
        if (btnLoad) {
            btnLoad.addEventListener('click', function () {
                start += 10;
                param = 'start=' + start;
                postRequest('/comment/get_comments/', param).then(result => {
                    let comments = JSON.parse(result);
                    if (comments.length === 0) {
                        reject();
                    }
                    let res = '';
                    comments.forEach(function (el) {
                        res += templateComment(el.img, el.user_name, el.date, el.discription, el.job);
                    });
                    return res;
                }).then(res => {
                    commentBlock.insertAdjacentHTML('beforeEnd', res);
                }).catch(() => {
                    btnLoad.style.display = 'none';
                });


            });
        }

    }

    function templateComment(img, name, data, discription, job) {
        let tmp = "<div class='comments_list wow  animated fadeInLeft'><div class='reviews_content'>"
            + "<div class='avatar_box'><img src='/dist/img/comments/" + img + "'title='аватар автора' alt='фото автора'></div>"
            + "<div class='reviews_text'><blockquote><p>" + discription + "</p><cite><strong>" + data + "</strong> <strong>" + name + "</strong></cite></blockquote>"
            + "</div></div></div>";
        return tmp;
    }
})();

(function () {
    let errorFileSize = document.getElementById('error-size');
    let errorName = document.getElementById('error-name');
    let flag = false;
    let form = document.getElementById('com-save');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        let fileLength = event.target.elements.image_user.files.length;
        let name = event.target.elements.name.value;
        let phone = event.target.elements.phone.value;
        let discription = event.target.elements.discription.value;


        checkName();

        if (fileLength) {
            let size = event.target.elements.image_user.files[0].size;
            let type = event.target.elements.image_user.files[0].type;
            checkType(type, size);
        } else {
            flag = true;
        }

        if (flag) {
            let formData = new FormData();
            formData.append('file', event.target.elements.image_user.files[0]);
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('discription', discription);

            postRequest1('/create/commit/', formData).then(res => {
                console.log(res);
            });
        }


    });

    function checkName(name) {
        let reg = new RegExp("^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$");
        if (reg.test(name)) {
            flag = true;
            errorName.classList.remove('error-file-true');
        } else {
            flag = false;
            errorName.classList.add('error-file-true');
        }
    }

    function checkType(type, size) {
        let typesFile = ['image/jpeg', 'image/png'];
        let mb = size / 1024 / 1024;
        if (typesFile.some(el => {
            return el === type;
        }) === true && mb <= 1.5) {
            flag = true;
            errorFileSize.classList.remove('error-file-true');
        } else {
            flag = false;
            errorFileSize.classList.add('error-file-true');
        }
    }
})();