let isEnhanced;

function enhanceImg(id) {
    let image = document.getElementById(id);

    if (isEnhanced) {
        image.style.position = "static";
        image.style.transform = "unset";
        image.style.zIndex = "unset";
        image.style.transition = "transform 0.25s ease";

        isEnhanced = false;
    } else {
        image.style.position = "fixed";
        image.style.zIndex = "100000";
        image.style.top = "25%";
        image.style.left = "25%";
        image.style.transform = "translate(-50%, -50%)";
        image.style.transform = "scale(1.7)";
        image.style.transition = "transform 0.25s ease";

        isEnhanced = true;
    }
}