export default class Recommendations {
    constructor () {
        const that = this;
        let items = document.querySelectorAll(".recommendations__item"),
            numbers = [],
            first = true;

        numbers = this.drawNumbers();

        numbers.forEach(function(index) {
            if (first) {
                items[index].classList.add("recommendations__item--hidden-large");
                first = false;
            }

            items[index].classList.add("recommendations__item--hidden");
        });

        this.setAria(items);
9
        window.addEventListener("resize", function () {
            that.setAria(items);
        });
    }

    drawNumber () {
        return Math.floor(Math.random() * 3);
    }

    drawNumbers () {
        let numbers = [],
            number = 0,
            i = 0;

        while (i < 2) {
            number = this.drawNumber();

            if (!numbers.includes(number)) {
                numbers.push(number);
                i++;
            }
        }

        return numbers;
    }

    setAria (items) {
        let width = window.innerWidth;

        if (width > 1200) {
            items.forEach(item => {
                item.setAttribute("aria-hidden", false);
            })
        } else if (width > 768) {
            items.forEach(item => {
                if (item.classList.contains("recommendations__item--hidden-large")) {
                    item.setAttribute("aria-hidden", true);
                } else {
                    item.setAttribute("aria-hidden", false);
                }
            })
        } else {
            items.forEach(item => {
                if (item.classList.contains("recommendations__item--hidden")) {
                    item.setAttribute("aria-hidden", true);
                } else {
                    item.setAttribute("aria-hidden", false);
                }
            })
        }
    }
}
