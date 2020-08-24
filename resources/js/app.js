require('./bootstrap');
import Cookies from "./components/cookies";
import MainNavigation from "./components/main-navigation";
import TopBar from "./components/top-bar";
import Recommendations from "./components/recommendations";
import ScrollTo from "./components/scroll-to";

const cookies = new Cookies();
const main_nav = new MainNavigation();
const top_bar = new TopBar;
const recommendations = new Recommendations();
const scroll_to = new ScrollTo();

