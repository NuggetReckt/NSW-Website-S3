let isEnhanced;

function enhanceImg(id) {
    let image = document.getElementById(id);

    if (isEnhanced) {
        image.style.position = "static";
        image.style.transform = "unset";
        image.style.zIndex = "unset";
        image.style.backdropFilter = "unset";
        image.style.padding = "0";
        document.documentElement.style.overflow = 'unset';

        isEnhanced = false;
    } else {
        image.style.position = "fixed";
        image.style.zIndex = "100000";
        image.style.top = "50%";
        image.style.left = "50%";
        image.style.transform = "translate(-50%, -50%) scale(1.8)";
        image.style.backdropFilter = "blur(5px)";
        image.style.padding = "100%";
        document.documentElement.style.overflow = 'hidden';

        isEnhanced = true;
    }
}