<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Mumble", false);

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>Le Mumble</h1>
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
                    <a href="#2">Prérequis</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3">Installation</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#4">Configuration</a>
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
                    <p class="wiki-p">Mumble est un logiciel gratuit et open-source pour la communication vocale de
                        proximité. Il est utilisé pour les joueurs souhaitant avoir une immersion en jeu plus importante
                        que le chat vocal traditionnel, comme Teamspeak ou Discord par exemple. En jeu, si ton ami
                        s'éloigne de ta position, tu l'entendras de moins en moins fort, puis plus du tout.</p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. Prérequis</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p wiki-p-no-indent">
                        - Le logiciel Mumble<br>
                        - Une connexion internet<br>
                        - Avoir les accès d'administrateur sur son ordinateur
                    </p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">
                        Si utilisation d'un client quelconque comprenant déjà le MumbleLink (Lunar, Badlion,...) :<br>
                        - MumbleLink Activé<br>
                        <br>
                        Si utilisation du client Fabric :<br>
                        - Fabric en version 1.21.1<br>
                        - Le mod MumbleLink pour Fabric
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. Installation</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">
                        Si tu utilises un client custom comprenant le MumbleLink, tu peux passer les étapes 3️⃣, 4️⃣ et
                        5️⃣
                    </p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/caution.png" class="wiki-img-highlight wiki-img-highlight-warn"
                         alt="warn">
                    <p class="wiki-p-highlight">
                        La version Mac de mumble actuelle n'est pas stable.<br>
                        Il est possible que certaines fonctionnalités ne fonctionnent pas pour le moment.
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step1.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Installe le client Mumble depuis le lien ci-dessous selon ton système d'exploitation :<br>
                        - <a href="https://download.mumble.com/en/mumble_client-1.4.230.x64.msi"
                             target="_blank" class="underline">Windows</a><br>
                        - <a href="https://download.mumble.com/en/mumble_client-1.4.230.x64.dmg"
                             target="_blank" class="underline">MacOs</a>
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step2.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Exécute le fichier précédemment enregistré, et suis les étapes d'installation.<br>
                        C'est fait ! Ne lance pas Mumble de suite.
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step3.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Télécharge l'installeur universel pour Fabric en cliquant sur le lien suivant :<br>
                        <a href="https://maven.fabricmc.net/net/fabricmc/fabric-installer/1.0.0/fabric-installer-1.0.0.jar"
                           target="_blank" class="underline">Télécharger Fabric</a>
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step4.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Ouvre le fichier <span class="wiki-command-exemple">fabric-installer-x.x.x.jar</span>
                        précédemment
                        téléchargé et une fois la fenêtre ouverte, sélectionne la
                        version 1.21.1, laisse la rubrique "Version du loader" telle quelle, veille à ce que "Créer un
                        profil" soit coché et clique sur "Installer". Fabric va s'installer et une fois fini, il devrait
                        apparaître dans le launcher de Minecraft.<br>
                        S'il n'apparait pas, pas de panique ! Dans le launcher
                        officiel, clique sur l'onglet "Configuration" puis clique sur "Nouvelle configuration". Ensuite
                        cherche la bonne version de Fabric et créé ta nouvelle configuration.
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step5.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Télécharge le mod MumbleLink en cliquant sur le lien suivant (Toujours pour la version 1.21.1
                        de Minecraft) :
                        <a href="https://www.curseforge.com/api/v1/mods/321669/files/4031799/download" target="_blank"
                           class="underline">Télécharger le MumbleLink</a> <br>
                        Puis place le fichier <span class="wiki-command-exemple">fabric-mumblelink-mod-x.x.x.jar</span>
                        dans le dossier <span class="wiki-command-exemple">mods</span> dans ton <span
                                class="wiki-command-exemple">.minecraft</span>. <br><br>
                        Comment accéder au dossier <span class="wiki-command-exemple">.minecraft</span> ?<br>
                        - Sur Windows, execute le raccourci clavier <span class="wiki-command-exemple">WIN + R</span> et
                        tape l'entrée
                        <span class="wiki-command-exemple">%appdata%</span> dans la fenêtre qui vient de s'ouvrir. Tu
                        trouveras dans ce dossier le fameux <span class="wiki-command-exemple">.minecraft</span>. <br>
                        - Sur Mac, execute le raccourci clavier <span class="wiki-command-exemple">maj + ⌘ + G</span>
                        puis copier-coller le chemin suivant :
                        <span class="wiki-command-exemple">~/Library/Application Support/minecraft</span>
                    </p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="4">4. Configuration</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step6.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        La configuration de Mumble se passe dans l'onglet "Configurer" puis dans "Réglages..." depuis la
                        fenêtre de base.<br>
                        Dans la même fenêtre de configuration, dans l'onglet "Plugin", activer le plugin "Link" comme
                        montré sur le screen ci-dessous :<br>
                        <img src="../assets/images/mumble1.png" class="wiki-img-exemple-solo" alt="mumble1-img"
                             id="mumble_config1" onclick="enhanceImg('mumble_config1')"><br>
                        Veilles également à ce que l'option "Lier au jeu et transmettre la position" soit activée, comme
                        montré sur ce même screenshot.
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step7.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Dans l'onglet "Sortie audio", mettre la distance maximale à 70m et la distance minimale à 1m.
                        Veilles à ce que la position audio soit activée.<br>
                        <img src="../assets/images/mumble2.png" class="wiki-img-exemple-solo" alt="mumble2-img"
                             id="mumble_config2" onclick="enhanceImg('mumble_config2')">
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step8.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Une fois toutes ces étapes effectuées, clique sur "Appliquer" puis sur "OK". <br>
                        Mumble est configuré !
                    </p>
                </div>
                <div class="wiki-article-content-steps">
                    <img src="../assets/images/step9.png" class="wiki-img-step"
                         alt="step">
                    <p class="wiki-p-step">
                        Maintenant, nous allons devoir ajouter un serveur. Pour ce faire, dans la fenêtre principale,
                        clique sur l'onglet "Serveur" puis sur "Se Connecter". Ensuite, clique sur "Ajouter Nouveau" et
                        rentre l'adresse <span class="wiki-command-exemple">mumble.noskillworld.fr</span>, laisse le
                        port tel quel, met ton Pseudo In-Game puis
                        nomme le serveur comme tu le souhaites. Tu devrais avoir quelque chose qui ressemble à ça :<br>
                        <img src="../assets/images/mumble3.png" class="wiki-img-exemple-solo" alt="mumble3-img"
                             id="img3" onclick="enhanceImg('img3')"><br>
                        Lance ton jeu, C'est Bon !
                    </p>
                </div>
            </div>
        </div>

<?php
$pager->setFooter();
?>