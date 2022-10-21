let btncopy = document.querySelector('.js-copy');

if (btncopy) {
    btncopy.addEventListener('click', docopy);
}

function docopy() {
    let range = document.createRange();
    let target = this.dataset.target;
    let fromElement = document.querySelector(target);
    let selection = window.getSelection();

    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        let result = document.execCommand('copy');
        if (result) {
            // La copie a réussi
            alert('IP copiée avec succès ! Bon jeu sur NoSkillWorld !');
        }
    } catch (err) {
        // Une erreur est survenue lors de la copie
        alert(err);
    }

    selection = window.getSelection();

    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
}