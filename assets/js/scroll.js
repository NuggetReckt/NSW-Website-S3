let toTopButton = document.getElementById("to-top");
let tableOfContent = document.getElementById("table-of-contents-wiki")

window.onscroll = function () {
    onScroll();
};

function onScroll() {
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200) {
        toTopButton.style.display = "block";
    } else {
        toTopButton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}