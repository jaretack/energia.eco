export default class Cookies {
    constructor () {
        const that = this;
        const cookies = document.querySelector(".cookies");
        const close = document.querySelector(".cookies__button");

        close.addEventListener("click", function () {
            that.setCookie("Energia.eco", "agree_cookies", 90 );
            cookies.remove();
        });

        if (that.getCookie("Energia.eco") !== "agree_cookies") {
            cookies.classList.remove("cookies--close");
        }
    }

    setCookie (cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        console.log("set cookies");
    }

    getCookie (cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    checkCookie () {
        var user = getCookie("username");
        if (user != "") {
            alert("Welcome again " + user);
        } else {
            user = prompt("Please enter your name:", "");
            if (user != "" && user != null) {
                setCookie("username", user, 365);
            }
        }
    }
}
