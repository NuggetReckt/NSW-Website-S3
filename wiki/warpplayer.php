<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("WarpPlayer");

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>Les WarpPlayers</h1>
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
                    <a href="#2">Créer son premier warp</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3">Administrer son warp</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#4">Interagir avec les autres warps</a>
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
                    <p class="wiki-p">Les WarPlayers sont des points de téléportation qui permettent
                        aux autres joueurs de donner accès à tes shops, tes fermes ou tes constructions. À l'aide d'un
                        joli menu, tu peux voir tous
                        les warps du serveur et t'y téléporter. Tu peux également créer tes propres warps pour partager
                        tes constructions ! Dans ce tutoriel, on t'explique comment.</p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/caution.png" class="wiki-img-highlight wiki-img-highlight-warn"
                         alt="warn">
                    <p class="wiki-p-highlight">
                        Quelques précisions : <br>
                        - Un warp est accessible par n'importe qui. Il est donc conseillé de claim la zone avant de
                        créer ton warp. (Plus d'infos <a class="underline" href="lands.php">ici</a>.) <br>
                        - Un warp n'est pas un home ! Si un warp n'est utile que pour vous (par exemple un point de
                        téléportation à sa base), il sera supprimé par un membre de l'équipe.<br>
                        - La commande <span class="wiki-command-exemple">/wp</span> est un alias de la commande
                        principale<span class="wiki-command-exemple">/warpplayer</span>.
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. Créer son premier warp</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">Pour créer ton warp, c'est très simple ! Tout ce que tu as à faire, c'est te
                        mettre à l'endroit où tu veux que ton warp soit, puis taper la commande <br><span
                                class="wiki-command-exemple">/wp set [nom_warp]</span>. Facile, non ?
                    </p>
                </div>
                <div class="wiki-article-content wiki-article-content-no-separation">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">La création d'un warp te coûtera 1,5k NSCoins. Pense à vérifier ta
                        quantité d'argent avant de créer ton warp.
                    </p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">Tu es limité à 2 warps. Cependant, tu peux en gagner davantage grâce
                        aux
                        récompenses des Jobs. (Plus d'infos <a class="underline" href="jobs.php">ici</a>.)</p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. Administrer son warp</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">
                        Pour administrer ton warp, tu peux le faire facilement depuis le menu en faisant la commande
                        <span class="wiki-command-exemple">/wp</span>, puis
                        dans la section "Mes Warps". Ensuite, clique sur le warp que tu souhaites modifier.
                    </p>
                </div>
                <div class="wiki-article-content-centered">
                    <div class="wiki-subsection" id="img1" onclick="enhanceImg('img1')">
                        <img src="../assets/images/wp-main-menu.png" class="wiki-img-exemple" alt="gui1-wp-img">
                        <p class="wiki-p-img-legend">Menu principal</p>
                    </div>
                    <div class="wiki-subsection" id="img2" onclick="enhanceImg('img2')">
                        <img src="../assets/images/wp-mywarps-menu.png" class="wiki-img-exemple" alt="gui2-wp-img">
                        <p class="wiki-p-img-legend">Menu "Mes Warps"</p>
                    </div>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">
                        Commandes supplémentaires :<br>
                        - Ajouter une description : <span
                                class="wiki-command-exemple">/wp desc set [nom_warp] [desc]</span> <br>
                        - Mettre une icône personnalisée : <span class="wiki-command-exemple">/wp </span> <br>
                        - Ban/Unban un joueur de votre warp: <span class="wiki-command-exemple">/wp ban remove|set [nom_warp] [joueur]</span>
                        <br>
                        - Transférer le warp à un autre joueur : <span class="wiki-command-exemple">/wp setowner set [nom_warp] [joueur]</span>
                        <br>
                        - Supprimer son warp: <span class="wiki-command-exemple">/wp remove [nom_warp]</span> <br>
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="4">4. Interagir avec les autres warps</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">Téléporte-toi au warp d'un autre joueur à l'aide de la commande <span
                                class="wiki-command-exemple">/wp [nom_warp]</span>.</p>
                </div>
                <div class="wiki-article-content">
                    <p class="wiki-p">Note les warps des autres joueurs avec la commande <span
                                class="wiki-command-exemple">/wp rate [nom_warp] [1-5]</span> (note de 1 à 5).</p>
                </div>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>