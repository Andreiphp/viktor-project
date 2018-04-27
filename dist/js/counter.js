class Counter {
    constructor() {
        this.blockCounter = document.querySelector('.counter');
        this.counter_pr = document.querySelectorAll('.counter_pr');
        this.counter_cl = document.querySelectorAll('.counter_cl');
        this.flag = true;

        this.count_cl = 0;
        let self = this;

        let header = document.getElementById('fixed_header');
        window.onscroll = function () {
            fixHeader(header);
            if (window.scrollY >= 1100) {
                if (self.flag === true) {
                    self.getCounter1();
                    self.getCounter2();
                }
            }
            if (window.scrollY < 1100) {
                self.flag = true;
            }

        }
    }

    getCounter1() {
        let n = 2000 / 140;
        this.flag = false;
        let count = 0;
        let timeout = setInterval(() => {
            this.counter_pr[0].textContent = count;
            this.counter_pr[1].textContent = count;
            if (count === 140) {
                this.flag = false;
                clearInterval(timeout);
                count = 0;
            }
            count++;
        }, n);
    }

    getCounter2() {
        let n = 2000 / 97;
        this.flag = false;
        let count2 = 0;
        let timeout = setInterval(() => {
            this.counter_cl[0].textContent = count2;
            this.counter_cl[1].textContent = count2;
            if (count2 === 97) {
                this.flag = false;
                clearInterval(timeout);
                count2 = 0;
            }

            count2++;
        }, n);
    }
}

