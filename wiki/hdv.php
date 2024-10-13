<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("HDV", false);

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>L'Hôtel Des Ventes</h1>
            <a href="/wiki">Revenir au Menu</a>
        </div>
    </div>
    <div class="wiki-content">
        <div class="table-of-contents-wiki" id="table-of-contents-wiki">
            <h3>Table des matières</h3>
            <ol class="table-wiki-list">
                <li class="table-wiki-item">
                    <a href="#1">Présentation</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#2">Acheter un item</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3">Vendre un item</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#4">Gérer un item mis en vente</a>
                </li>
            </ol>
        </div>
        <div class="wiki-article">
            <div class="wiki-article-title">
                <h2 id="1">1. Présentation</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">
                        L'hôtel Des Ventes (ou Auction House pour les anglophones) est un système vous
                        permettant de mettre des items à la vente pour tous les joueurs sur le serveur. Depuis une jolie
                        interface, vous pourrez vendre, acheter ou gérer un item que vous avez mis en vente.<br>
                        Faisons d'abord une brève explication du menu principal, que vous pourrez ouvrir une fois en jeu
                        sur le serveur Semi-RP à l'aide de la commande <span class="wiki-command-exemple">/hdv</span>.
                        Une fois la commande exécutée, une interface s'ouvre :
                    </p>
                </div>
                <div class="wiki-article-content-centered">
                    <div class="wiki-subsection-row" id="gui1-hdv-img" onclick="enhanceImg('gui1-hdv-img', 'row')">
                        <img src="../assets/images/hdv-main-menu.png" class="wiki-img-exemple" alt="gui1-hdv-img">
                        <p class="wiki-p-img-legend-row">
                            Ce menu est le menu principal de l'Hôtel Des Ventes. C'est à partir de ce menu que vous
                            pourrez acheter, vendre et gérer les items que vous avez mis en vente.<br>
                            <br>
                            Les items mis en vente par les autres joueurs se retrouvent au-dessus de la barre de
                            navigation.
                        </p>
                    </div>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">
                        Lorsque tous les slots de l'inventaire sont remplis, des flèches directionnelles apparaissent
                        pour vous balader de page en page.
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. Acheter un item</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">
                        Pour acheter un item, c'est facile ! Il te suffit de cliquer sur l'item que tu souhaites acheter
                        dans la liste et une fois dans la fenêtre d'achat, cliquer sur la vitre verte pour confirmer
                        l'achat.
                    </p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/caution.png" class="wiki-img-highlight wiki-img-highlight-warn"
                         alt="warn">
                    <p class="wiki-p-highlight">
                        Si un autre joueur achète le même item que toi, c'est celui qui confirme l'achat en premier qui
                        pourra acheter l'item. Dans le cas où l'autre joueur confirme l'achat de l'item avant vous, tu
                        seras déplacé au menu principal avec un message d'erreur. Il en va de même si l'item est retiré
                        de la vente par le vendeur au moment où tu confirmes l'achat de l'item en question.
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. Vendre un item</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step1.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Pour vendre un item, c'est facile aussi !<br>
                        Depuis le menu principal, dans la barre de navigation, il te suffit de cliquer sur l'icône
                        tournesol où tu seras redirigé vers le menu de vente.
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step2.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Une fois dans ce menu, sélectionne l'item que tu veux vendre dans ton inventaire en cliquant
                        dessus. L'item sélectionné devrait apparaitre en haut.<br>
                        Si tu t'es trompé dans ta séléction, pas de panique ! Toujours dans le menu de vente, clique sur
                        le nouvel item dans ton inventaire pour remplacer.<br>
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step3.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Une fois l'item sélectionné, clique sur la vitre jaune pour définir un prix. Cela t'ouvrira un
                        panneau sur lequel tu pourras écrire sur la zone indiquée par les flèches le montant de vente
                        souhaité. Seuls les nombres entiers sont acceptés. Clique sur "Terminé" ou "Done" dépendant de
                        la langue de ton jeu pour valider.<br>
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step4.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Confirme la vente de ton item en cliquant sur la vitre verte. Cette action fera disparaître
                        l'item sélectionné ton inventaire.<br>
                        Ça y est, ton item a bien été mis en vente !
                    </p>
                </div>

                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">
                        Tu es limité à 5 items mis en vente à la fois. Attend qu'un de tes items soit vendu ou
                        retires-en un de la vente avant d'en remettre en vente.<br>
                        Cette valeur est pour le moment susceptible d'évoluer.
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="4">4. Gérer un item mis en vente</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">
                        Pour gérer tes items mis en vente, il te suffit de cliquer sur l'item que tu veux gérer dans la
                        liste depuis le menu principal de l'Hôtel Des Ventes. Il faut que l'item sur lequel tu cliques
                        soit un item que tu as vendu, sinon tu seras emmené sur la page d'achat de l'item.<br>
                        Dans le menu de modification de l'item, tu pourras modifier le prix de l'item en cliquant sur le
                        tournesol. Comme pour la vente d'un item, un panneau te sera affiché à l'écran dans lequel tu
                        écriras le nouveau prix à définir pour ton item.<br>
                        Si tu veux retirer ton item de la vente, il te suffit de cliquer sur la poudre de redstone.
                        En le retirant de la vente, l'item te sera remis dans ton inventaire.
                    </p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/caution.png" class="wiki-img-highlight wiki-img-highlight-warn"
                         alt="warn">
                    <p class="wiki-p-highlight">
                        La méthode pour sélectionner depuis la liste l'item à modifier est temporaire. Un système plus
                        élaboré sera mis en place très prochainement.
                    </p>
                </div>
            </div>
        </div>

<?php
$pager->setFooter();
?>