export default class MainNavigation {
    constructor () {
        const that = this,
            nav = document.querySelector(".main-navigation"),
            nav_container = document.querySelector(".main-navigation__container"),
            button = document.querySelector(".main-navigation__toggle-button"),
            top_bar = document.querySelector(".top-bar");
        let last_scroll_top = 0;

        window.addEventListener('scroll', function() {
            let new_value = window.pageYOffset;
            if(last_scroll_top - new_value < 0){
                nav.classList.add("main-navigation--fixed");
                nav.classList.remove("main-navigation--fixed-with");
                top_bar.classList.remove("top-bar--fixed");
            } else if(last_scroll_top - new_value > 0){
                nav.classList.remove("main-navigation--fixed");
                top_bar.classList.add("top-bar--fixed");

                if(window.scrollY > 0) {
                    nav.classList.add("main-navigation--fixed-with");
                } else {
                    nav.classList.remove("main-navigation--fixed-with");
                }
            }

            last_scroll_top = new_value;
        });

        if(window.scrollY > 0) {
            nav.classList.add("main-navigation--fixed");
        } else {
            nav.classList.remove("main-navigation--fixed");
        }

        button.addEventListener("click", function() {
            button.classList.toggle("is-active");
            nav.classList.toggle("main-navigation--is-active");
            document.body.classList.toggle("noscroll");

            if (button.classList.contains("is-active")) {
                nav_container.setAttribute("aria-expanded", true);

                if (window.innerWidth > window.innerHeight){
                    nav.classList.remove("main-navigation--fixed-with");
                    nav.classList.add("main-navigation--fixed");
                    top_bar.classList.remove("top-bar--fixed");
                }
            } else {
                nav_container.setAttribute("aria-expanded", false);
            }
        });

        window.addEventListener("resize", function () {
            that.setAria();
        });
    }

    setAria () {
        const nav_container = document.querySelector(".main-navigation__container");
        let width = window.innerWidth;

        if (width > 1200) {
            nav_container.setAttribute("aria-expanded", true);
        } else {
            nav_container.setAttribute("aria-expanded", false);
        }
    }
}
