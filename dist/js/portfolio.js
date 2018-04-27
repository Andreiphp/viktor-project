class Portfolio {
    constructor() {
        this.mainBlock = document.getElementById('tabs');
        this.btnLoad = document.getElementById('load_more');
        if (this.mainBlock) {
            let param = 'start=' + 0 + '&cat=' + 1;
            this.getFirstProjects(param);
            this.selectCategory();
            param = 'start=' + 0 + '&cat=' + 2;
            this.getFirstProjects(param, 'balcony_content');
            param = 'start=' + 0 + '&cat=' + 3;
            this.getFirstProjects(param, 'cottages_content');
            param = 'start=' + 0 + '&cat=' + 4;
            this.getFirstProjects(param, 'Bathroom_content');
        }
        this.countFlat = 0;
        this.countBalcony = 0;
        this.countCottages = 0;
        this.countBathroom = 0;
        this.countfacades = 0;
       if(this.mainBlock){
           this.loadProjects();
       }

    }

    selectCategory() {
        let self = this;
        this.mainBlock.addEventListener('click', function (event) {
            let contentBlock = event.target.id;

            if (event.target.classList.contains('c-tabs-nav__link')) {
                let countElements = document.getElementById(contentBlock + '_content').childElementCount;
                switch (event.target.id) {
                    case 'flat':
                        if (event.target.id != self.btnLoad.getAttribute('data-load')) {
                            self.btnLoad.setAttribute('data-load', event.target.id);
                        }
                        self.checkProjects(countElements, contentBlock, 1);
                        break;
                    case 'balcony':

                        if (event.target.id != self.btnLoad.getAttribute('data-load')) {
                            self.btnLoad.setAttribute('data-load', event.target.id);
                        }

                        self.checkProjects(countElements, contentBlock, 2);
                        break;
                    case 'cottages':
                        if (event.target.id != self.btnLoad.getAttribute('data-load')) {
                            self.btnLoad.setAttribute('data-load', event.target.id);
                        }
                        self.checkProjects(countElements, contentBlock, 3);
                        break;
                    case 'Bathroom':
                        if (event.target.id != self.btnLoad.getAttribute('data-load')) {
                            self.btnLoad.setAttribute('data-load', event.target.id);
                        }
                        self.checkProjects(countElements, contentBlock, 4);
                        break;
                    case 'facades':
                        if (event.target.id != self.btnLoad.getAttribute('data-load')) {
                            self.btnLoad.setAttribute('data-load', event.target.id);
                        }
                        self.checkProjects(countElements, contentBlock, 5);
                        break;

                }
            }

        });
    }

    loadProjects() {
        let self = this;
        this.btnLoad.addEventListener('click', function (event) {
            let contentBlock = event.target.getAttribute('data-load') + '_content';
            let countElements = document.getElementById(contentBlock).childElementCount;
            switch (contentBlock) {
                case 'flat_content':
                    self.countFlat += 6;
                    self.setParam(self.countFlat, 1, contentBlock);
                    self.checkProjects(countElements, contentBlock, 1);
                    break;
                case 'balcony_content':
                    self.countBalcony += 6;
                    self.setParam(self.countBalcony, 2, contentBlock);
                    self.checkProjects(countElements, contentBlock, 2);
                    break;

                case 'cottages_content':

                    self.countCottages += 6;
                    self.setParam(self.countCottages, 3, contentBlock);
                    self.checkProjects(countElements, contentBlock, 3);
                    break;

                case 'Bathroom_content':
                    self.countBathroom += 6;
                    self.setParam(self.countBathroom, 4, contentBlock);
                    self.checkProjects(countElements, contentBlock, 4);
                    break;
                case 'facades_content':
                    self.countfacades += 6;
                    self.setParam( self.countfacades, 5, contentBlock);
                    self.checkProjects(countElements, contentBlock, 5);
                    break;

            }

        });
    }

    checkProjects(countElements, element, cat) {

        let param = 'cat=' + cat;
        postRequest('/check/projects/', param).then(result => {
            if (countElements === Number(result)) {
                this.btnLoad.style.backgroundColor = '#000';
                this.btnLoad.style.color = '#fff';
                this.btnLoad.disabled = true;
            } else {
                this.btnLoad.disabled = false;
                this.btnLoad.style.color = '#ffc000';
                this.btnLoad.style.backgroundColor = '#fff';
            }
        });
    }

    setParam(countPage, cat, contentBlock) {

        let param = 'start=' + countPage + '&cat=' + cat;

        this.getFirstProjects(param, contentBlock);
    }

    getFirstProjects(param, contentBlock = 'flat_content') {
        postRequest('/portfolio/getProjects/', param).then(result => {
            let projects = JSON.parse(result);
            let res = '';
            projects.forEach(function (el) {
                res += template(el.id, el.img, el.title);
            });
            return res;
        }).then(res => {
            document.getElementById(contentBlock).insertAdjacentHTML('beforeEnd', res);
        });
    }
}

let portfolio = new Portfolio();

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

function template(id, img, title) {
    let tmp = "<div style='opacity: 1!important;' class='tab__content_item'><a href='' title=" + title + "><img src='/dist/img/projects/" + img + "'></a>"
        + "<span class='tab_title_hover'><a href='/portfolio/projects/" + id + "'>" + title + "<i class='fa fa-eye'></i></a></span></div>";
    return tmp;
}

function fixHeader(header) {
    if (window.scrollY > 10) {
        header.classList.add('header_top_fix');
    } else {
        header.classList.remove('header_top_fix');
    }
}