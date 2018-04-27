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
                    btn.textContent = 'Добавить комментарий';
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
            if(commentBlock){
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
            + "<div class='reviews_text'><blockquote><p>" + discription + "</p><cite><strong>" + data + "</strong><strong>" + name + "</strong>" + job + "</cite></blockquote>"
            + "</div></div></div>";
        return tmp;
    }
})();