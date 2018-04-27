class Slide {

    constructor() {
        this.projectBox = document.querySelector('.our_progect_content');
        this.catBox = document.getElementById('slider_cat');
        this.content = [];
        this.elSplice = 6;
        this.btn_slider = document.getElementById('btn_slider');

        if (this.catBox) {
            this.getCategorProjects();
        }
        if (this.btn_slider) {
            this.w();
            this.getAllProgects('main/slide');
        }

        // window.onresize = function () {
        //     console.log('resize');
        // }
    }

    getCategorProjects() {
        let self = this;
        this.catBox.addEventListener('click', function (event) {
            switch (event.target.id) {
                case 'all':
                    self.content.splice(0, self.content.length);
                    self.getAllProgects('main/slide');
                    break;
                case 'kv':
                    self.content.splice(0, self.content.length);
                    self.getAllProgects('main/slide?param=1');
                    break;
                case 'loggias':
                    self.content.splice(0, self.content.length);
                    self.getAllProgects('main/slide?param=2');
                    break;
                case 'cottage':
                    self.content.splice(0, self.content.length);
                    self.getAllProgects('main/slide?param=3');
                    break;
                case 'bathroom':
                    self.content.splice(0, self.content.length);
                    self.getAllProgects('main/slide?param=4');
                    break;
            }
        })
    }


    getAllProgects(param) {
        this.postRequest(param).then((result) => {
            let projects = JSON.parse(result);
            return projects;
        }).then(result => {
            let arr = [];
            for (let i = 0; i < result.length; i++) {
                arr.push("<div class='progect_box_wrapper'><div class='progect_box'><img alt='проект " + result[i]['title'] + "' src='../dist/img/projects/" + result[i]['img'] + "'>" +
                    "<div class='project_box_hover'><span class='our_project_title'><a href='/portfolio/projects/" + result[i]['id'] + "' title='просмотреть проект'>" + result[i]['title'] + "</a></span></div></div></div>");
            }
            while (arr.length) {
                this.content.push(arr.splice(0, this.elSplice));
            }
        }).then(() => {
            let fr = this.content[0].join(',');
            this.projectBox.innerHTML = fr;
            let Time;
            let cnt = 0;
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
        })
    }

    w() {
        let self = this;
        let count = 0;
        let cnt = 0;
        let Time;
        document.getElementById('btn_slider').addEventListener('click', function (event) {
            if (event.target.className === 'next') {
                let timeout = self.timeOut();
                self.deleteClass();
                setTimeout(() => {
                    self.btnDisabled();
                    count = (count >= self.content.length - 1) ? 0 : ++count;
                    let fr = self.content[count].join(',');
                    self.projectBox.innerHTML = fr;
                    let r = document.querySelectorAll('.progect_box');
                    Time = setInterval(() => {
                        if (cnt > r.length - 1) {
                            cnt = 0;
                            clearInterval(Time);
                            self.btnDisabled(true);
                        } else {
                            r[cnt].classList.add('werty');
                            cnt++;
                        }
                    }, 100);

                }, timeout + 100);
            }

            if (event.target.className === 'back') {
                count = (count <= 0) ? self.content.length - 1 : --count;
            }
        })
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
        // for (let i = 0; i < r.length; i++) {
        //     r[i].classList.remove('werty');
        // }
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


    getElements(img, title) {
        let elements = "<div class='progect_box_wrapper'><div class='progect_box'>" +
            "<img src='/dist/img/'" + img + "></div></div>";
        return elements;
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