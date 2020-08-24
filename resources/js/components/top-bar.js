export default class TopBar {
    constructor () {
        const that = this;

        that.setAria();

        window.addEventListener("resize", function () {
            that.setAria();
        });
    }

    setAria () {
        let text = document.querySelector(".top-bar__text"),
            text_mobile = document.querySelector(".top-bar__text-mobile"),
            width = window.innerWidth;

        if (width > 1440) {
            text.setAttribute("aria-hidden", false);
            text_mobile.setAttribute("aria-hidden", true);
        } else if (width > 992) {
            text.setAttribute("aria-hidden", true);
            text_mobile.setAttribute("aria-hidden", false);
        } else if (width <= 992) {
            text.setAttribute("aria-hidden", true);
            text_mobile.setAttribute("aria-hidden", true);
        }
    }
}
