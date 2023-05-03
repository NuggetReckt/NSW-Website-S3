let isEnhanced;

function enhanceImg(id) {
    let image = document.getElementById(id);

    if (isEnhanced) {
        image.style.position = "static";
        image.style.transform = "unset";
        image.style.zIndex = "unset";

        isEnhanced = false;
    } else {
        image.style.position = "fixed";
        image.style.zIndex = "100000";
        image.style.top = "50%";
        image.style.left = "50%";
        image.style.transform = "translate(-50%, -50%) scale(1.8)";

        isEnhanced = true;
    }
}