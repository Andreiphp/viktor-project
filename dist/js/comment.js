'use strict';
if (window.location.pathname === '/comment/') {
    (function () {

        let start = 0;
        let btnLoad = document.getElementById('load_commit');
        let commentBlock = document.querySelector('.toComments');

        showFormCommit();
        countComments();
        getComments();
        ajaxLoadComments();


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

        function countComments() {
            postRequest('/comments/checkComment/').then(res => {
                console.log(res);
                if (start + 10 >= res) {
                    btnLoad.style.display = 'none';
                }
            });
        }


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


        function ajaxLoadComments() {
            let param;
            if (btnLoad) {
                btnLoad.addEventListener('click', function () {
                    start += 10;
                    countComments();
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
        simpleCaptcha();
        let errorFileSize = document.getElementById('error-size');
        let errorName = document.getElementById('error-name');
        let flag = false;
        let form = document.getElementById('com_save');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            flag = false;
            let fileLength = event.target.elements.image_user.files.length;
            let name = event.target.elements.name.value;
            let phone = event.target.elements.phone.value;
            let discription = event.target.elements.discription.value;


            checkName(name);

            if (flag) {
                if (fileLength) {
                    let size = event.target.elements.image_user.files[0].size;
                    let type = event.target.elements.image_user.files[0].type;
                    checkType(type, size);
                } else {
                    flag = false;
                    document.getElementById('new-avatar').textContent = 'Вы не выбрали фото!';
                }

            }

            if (flag) {
                checkComment(event.target.elements.discription.value);
            }

            if (flag) {
                checkCaptcha();
            }

            if (flag) {
                let formData = new FormData();
                formData.append('file', event.target.elements.image_user.files[0]);
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('discription', discription);

                postRequest1('/create/commit/', formData).then((res) => {
                    closeFormCommit();
                    simpleCaptcha();
                    thanks();
                });
            }
        });

        load_avtar.addEventListener('change', function () {
            errorFileSize.classList.remove('error-file-true');
            let newAvatar = document.getElementById('new-avatar');
            if (form.load_avtar.files.length) {
                let avatarName = form.load_avtar.files[0].name;
                newAvatar.textContent = 'Вы выбрали файл' + ' ' + avatarName;
            } else {
                newAvatar.textContent = 'Вы не выбрали фото!';
            }
        });

        function checkName(name) {
            let reg = /^[а-яА-Я]+\s*[а-яА-Я]*$/;
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
                document.getElementById('new-avatar').textContent = '';
                errorFileSize.classList.add('error-file-true');
            }
        }

        function checkComment(comment) {
            let errorComment = document.getElementById('error-comment');
            if (comment.length < 40 || comment === '' || comment === undefined) {
                flag = false;
                errorComment.style.display = 'block';
            } else {
                flag = true;
                errorComment.style.display = 'none';
            }
        }

        function closeFormCommit() {
            document.getElementById('new-avatar').textContent = '';
            document.getElementById('com_save').reset();
            document.getElementById('show_form').click();
        }

        function randomNumber(m, n) {
            m = parseInt(m);
            n = parseInt(n);
            return Math.floor(Math.random() * (n - m + 1)) + m;
        }

        function simpleCaptcha() {
            let aspmA = randomNumber(1, 23);
            let aspmB = randomNumber(1, 23);
            let sumAB = aspmA + aspmB;
            document.getElementById('aspm').innerHTML = aspmA + ' + ' + aspmB + ' = ';
            document.forms.com_save.md5.value = MD5(String(sumAB));

        }

        function checkCaptcha() {
            let val1 = document.forms.com_save.md5.value;
            let val2 = MD5(document.forms.com_save.user_value.value);
            if (val1 === val2) {
                flag = true;
                document.getElementById('error-captcha').textContent = '';
            } else {
                document.getElementById('error-captcha').textContent = 'Не верное значение';
                simpleCaptcha();
                flag = false;
            }
        }

        function thanks() {
            let windowComment = document.getElementById('wt-comment');
            windowComment.style.transition = '0.3s';
            windowComment.style.opacity = '1';
            windowComment.style.zIndex = '1000';

            setTimeout(() => {
                windowComment.style.opacity = '0';
                windowComment.style.zIndex = '-1';
            }, 3000);
        }


    })();
}
