const navBar = document.querySelector(".navbar-list");
const navToggle = document.querySelector(".responsive-nav-toggle");

navToggle.addEventListener("click", () => {
    const isVisible = navBar.getAttribute("data-visible");

    if (isVisible === "false") {
        navBar.setAttribute("data-visible", "true")
        navToggle.setAttribute("aria-expanded", "true")
    } else if (isVisible === "true") {
        navBar.setAttribute("data-visible", "false")
        navToggle.setAttribute("aria-expanded", "false")

    }
});

window.addEventListener("scroll", disableScroll);
window.addEventListener("touchmove", disableScroll);

function disableScroll() {
    const isVisible = navBar.getAttribute("data-visible");

    if (isVisible === "true") {
        window.scrollTo(0, 0);
    }
}