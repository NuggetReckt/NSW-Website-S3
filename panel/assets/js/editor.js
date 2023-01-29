const editWindow = document.querySelector(".actu-edit-item");
const editToggle = document.querySelector(".actu-edit-toggle");

editToggle.addEventListener("click", () => {
    const isVisible = editWindow.getAttribute("data-visible");

    if (isVisible === "false") {
        editWindow.setAttribute("data-visible", "true")
        editToggle.setAttribute("aria-expanded", "true")
    } else if (isVisible === "true") {
        editWindow.setAttribute("data-visible", "false")
        editToggle.setAttribute("aria-expanded", "false")

    }
});

window.addEventListener("scroll", disableScroll);
window.addEventListener("touchmove", disableScroll);

function disableScroll() {
    const isVisible = editWindow.getAttribute("data-visible");

    if (isVisible === "true") {
        window.scrollTo(0, 0);
    }
}