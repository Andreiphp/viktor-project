class Slide {

    constructor() {
        this.projectBox = document.querySelector('.our_progect_content');
        this.catBox = document.getElementById('slider_cat');
        this.content = [];
        this.elSplice = 3;
        this.btn_slider = document.getElementById('btn_slider');
        this.g = false;
        if (this.catBox) {
            this.getCategorProjects();
        }
        if (this.btn_slider) {
            this.w();
            this.getAllProgects('main/slide');
        }

    }

    getCategorProjects() {
        this.catBox.addEventListener('click', function (event) {
            switch (event.target.id) {
                case 'all':
                    this.deleteClass();
                    setTimeout(() => {
                        this.content.splice(0, this.content.length);
                        this.getAllProgects('main/slide');
                    }, 500);
                    break;
                case 'kv':
                    this.deleteClass();
                    setTimeout(() => {
                        this.content.splice(0, this.content.length);
                        this.getAllProgects('main/slide?param=1');
                    }, 500);

                    break;
                case 'loggias':
                    this.deleteClass();
                    setTimeout(() => {
                        this.content.splice(0, this.content.length);
                        this.getAllProgects('main/slide?param=2');
                    }, 500);

                    break;
                case 'cottage':
                    this.deleteClass();
                    setTimeout(() => {
                        this.content.splice(0, this.content.length);
                        this.getAllProgects('main/slide?param=3');
                    }, 500);

                    break;
                case 'bathroom':
                    this.deleteClass();
                    setTimeout(() => {
                        this.content.splice(0, this.content.length);
                        this.getAllProgects('main/slide?param=4');
                    }, 500);
                    this.content.splice(0, this.content.length);
                    this.getAllProgects('main/slide?param=4');
                    break;
            }
        }.bind(this));
    }


    getAllProgects(param) {
        this.postRequest(param).then((result) => {
            let projects = JSON.parse(result);
            return projects;
        }).then(result => {
            if (result.length === 0) {
                new Error('gecnj');
            } else {
                let arr = [];
                for (let i = 0; i < result.length; i++) {
                    arr.push(
                        this.template(result[i]['title'], result[i]['img'], result[i]['id'])
                    );
                }

                while (arr.length) {
                    this.content.push(arr.splice(0, this.elSplice));
                }
            }

        }).then(() => {
            let Time;
            let cnt = 0;
            this.btnDisabled(true);
            let fr = this.content[0].join(',').replace(/,/g, '');
            this.projectBox.innerHTML = fr;
            let r = document.querySelectorAll('.progect_box');
            Time = setInterval(() => {
                if (cnt > r.length - 1) {
                    cnt = 0;
                    clearInterval(Time);
                } else {
                    r[cnt].classList.add('werty');
                    cnt++;
                }
            }, 200);
        }).catch(error => {
            this.errorMess();
        })
    }

    changeTemplate(count, cnt) {
        let fr = this.content[count].join(',').replace(/,/g, '');
        this.projectBox.innerHTML = fr;
        let r = document.querySelectorAll('.progect_box');
        this.clearInterval(cnt, r);
    }

    w() {
        let count = 0;
        let cnt = 0;
        document.getElementById('btn_slider').addEventListener('click', function (event) {
            if (event.target.className === 'next') {
                let timeout = this.timeOut();
                this.deleteClass();
                setTimeout(() => {
                    this.btnDisabled();
                    count = (count >= this.content.length - 1) ? 0 : ++count;
                    this.changeTemplate(count, cnt);

                }, timeout + 100);
            }

            if (event.target.className === 'back') {
                let timeout = this.timeOut();
                this.deleteClass();
                setTimeout(() => {
                    this.btnDisabled();
                    count = (count <= 0) ? this.content.length - 1 : --count;
                    this.changeTemplate(count, cnt);

                }, timeout + 100);
            }
        }.bind(this));
    }

    btnDisabled(bool) {
        let next = document.querySelector('.next');
        let back = document.querySelector('.back');
        if (bool) {
            next.disabled = false;
            back.disabled = false;
        } else {
            next.disabled = true;
            back.disabled = true;
        }
    }

    deleteClass() {
        let Time;
        let cnt = 0;
        this.btnDisabled();
        let r = document.querySelectorAll('.progect_box');

        Time = setInterval(() => {
            if (cnt > r.length - 1) {
                cnt = 0;
                clearInterval(Time);
            } else {
                if (r[cnt].classList.contains('werty')) {
                    r[cnt].classList.remove('werty');
                    cnt++;
                }
            }
        }, 100);
    }

    timeOut() {
        let r = document.querySelectorAll('.progect_box');
        let timeout;
        if (r.length > 0) {
            timeout = r.length * 100;
        } else {
            timeout = 100;
        }
        return timeout;
    }


    postRequest(url, params) {
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

    clearInterval(cnt, r) {

        let Time = setInterval(() => {
            if (cnt > r.length - 1) {
                cnt = 0;
                clearInterval(Time);
                this.btnDisabled(true);
            } else {
                r[cnt].classList.add('werty');
                cnt++;
            }
        }, 100);
    }

    template(title, img, id) {
        let str = "<div class='progect_box_wrapper'>" +
            "<div class='progect_box'>" +
            "<img alt='Проект - название : " + title + "' src='../dist/img/projects/" + img + "'>" +
            "<div class='project_box_hover'>" +
            "<span class='our_project_title'>" +
            "<a href='/portfolio/projects/" + id + "' title='просмотреть проект: " + title + "'>" + title + "</a></span>" +
            "</div></div></div>";

        return str;
    }

    errorMess() {
        let span = document.createElement('span');
        span.textContent = 'Здесь пока нет проектов';
        span.classList.add('error_span');
        span.style.color = 'red';
        while (this.projectBox.firstChild) {
            this.projectBox.firstChild.remove();
        }
        this.projectBox.appendChild(span);
        this.btnDisabled();
    }

}

let slide = new Slide();
tabsSlide();

function tabsSlide() {
    let tabs = document.getElementById('slider_cat');
    if (tabs) {
        tabs.addEventListener('click', function (event) {
            for (let i = 0; i < tabs.childElementCount; i++) {
                if (event.target.textContent === tabs.children[i].textContent) {
                    event.target.classList.add('our_item_active');
                } else {
                    tabs.children[i].classList.remove('our_item_active');
                }
            }


        })
    }
}