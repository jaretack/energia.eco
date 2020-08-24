export default class ScrollTo {
    constructor () {
        const links = document.querySelectorAll(".scroll-to");

        for (const link of links) {
            link.addEventListener("click", this.clickHandler);
        }
    }

    clickHandler (e) {
        e.preventDefault();
        const href = this.getAttribute("href"),
            nav = document.querySelector(".main-navigation"),
            button = document.querySelector(".main-navigation__toggle-button");
        let offsetTop = document.querySelector(href).offsetTop,
            width = window.innerWidth;

        if (window.innerWidth > 1200) {
            offsetTop -= 113;
            offsetTop += 120;
        } else {
            offsetTop -= 88;
            offsetTop += 150;
        }

        scroll({
            top: offsetTop,
            behavior: "smooth"
        });

        if (e.target.classList.contains("main-navigation__item-link")) {
            if (width <= 1200) {
                button.classList.toggle("is-active");
                nav.classList.toggle("main-navigation--is-active");
                document.body.classList.toggle("noscroll");
            }
        }
    }
}
