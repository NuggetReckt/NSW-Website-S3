<?php
require_once "assets/php/pager.php";
$pager = new Pager("Wiki");

$pager->setHeader();
?>
            <div class="top-content top-content-others" id="top-content-wiki">
                <div class="top-title">
                    <h1 id="wiki-title">Bienvenue sur le Wiki de NoSkillWorld !</h1>
                </div>
            </div>
            <div id="wiki-nav">
                <div id="row">
                    <div class="main-top-col-wiki" id="top-semirp">
                        <span><a href="#Semi-RP" class="bold" style="color: black;">Semi-RP</a></span>
                    </div>
                    <div class="main-top-col-wiki" id="top-hardcore">
                        <span><a href="#HardCore" class="bold" style="color: black;">HardCore</a></span>
                    </div>
                    <div class="main-top-col-wiki" id="top-creatif">
                        <span><a href="#Creatif" class="bold" style="color: black;">Créatif</a></span>
                    </div>
                    <div class="main-top-col-wiki" id="top-ctoutpt">
                        <span><a href="#ctoutpt" class="bold" style="color: black;">CTOUTPT.FR</a></span>
                    </div>
                    <div class="main-top-col-wiki" id="top-qr">
                        <span><a href="#QR" class="bold" style="color: black;">Questions-Réponses</a></span>
                    </div>
                </div>
            </div>
            <br>
            <div id="gauche">
                <div class="docu-content">
                    <div class="docu">
                        <h2 class="underline" id="Semi-RP">Semi-RP</h2>
                        <h2>Présentation :</h2>
                        <h3 class="bold">1 - Le but du serveur</h3>
                        <p>Le but du serveur survie est très simple, survivre dans un monde hostile rempli de mobs et de joueurs.
                            Fais-toi un stuff, Construis ta base, crée ta ville,
                            vend et échange avec les joueurs du serveur pour avancer.
                            Sélectionne le Job qui te correspond le mieux et remplis les quêtes pour récupérer plein de récompenses !</p>
                        <h3 class="bold">2 - Comment bien commencer</h3>
                        <p>Avant de bien commencer ton aventure en Semi-RP, assure-toi d'avoir un bon stuff ! N'oublie pas que le monde est hostile !</p>
                        <p>Pour ce fait, rends-toi en FarmZone afin d'acquérir des ressources. La FarmZone est uniquement là pour le farm de ressources.
                            N'y crée donc pas ta base, car ce serveur est reset tous les mois !
                            Un stuff en fer (ou mieux) est recommandé avant d'aller en serveur survie. Une fois que tu as ton stuff tout neuf,
                            tu peux te rendre en serveur survie et commencer ton aventure !</p>
                        <h3 class="bold">3 - Aller plus loin</h3>
                        <p>Si tu le souhaites, avant de créer ta base en Semi-RP, tu peux imaginer et travailler ton design sur le serveur Créatif.
                            Cela te permettra de tester des designs et ainsi voir de quels items tu auras besoin pour construire la base qui te convient le mieux !</p>
                        <h2 class="st">Commandes :</h2>
                        <span class="bold">/spawn</span><span> : Pour retourner au spawn</span><br>
                        <span class="bold">/tpa</span><span> : Envoie une demande de tp à un joueur pour vous téléporter à lui</span><br>
                        <span class="bold">/tpahere</span><span> : Envoie une demande de tp à un joueur pour qu'il se téléporte à vous</span><br>
                        <span class="bold">/lands create [nom]</span><span> : Permet de créer une land</span><br>
                        <span class="bold">/lands claim</span><span> : Permet de protéger votre base dans une région d'un chunk</span><br>
                        <span class="bold">/lands unclaim</span><span> : Unclaim la zone sur laquelle vous vous trouvez</span><br>
                        <span class="bold">/lands</span><span> : Ouvre le menu de gestion de vos lands et de vos claims</span><br>
                        <span class="bold">/shop create</span><span> : Permet de créer un shop à l'aide d'un coffre</span><br>
                        <span class="bold">/warpplayer</span><span> : Ouvre le menu des warps</span><br>
                        <span class="bold">/warplayer create [nom]</span><span> : Crée un warp à votre position</span><br>
                        <span class="bold">/sb off - on</span><span> : Active ou désactive le scoreboard</span><br>
                    </div>
                </div>
                <br>
                <div class="docu-content">
                    <div class="docu">
                        <h2 class="underline" id="HardCore">HardCore</h2>
                        <h2>Présentation :</h2>
                        <h3 class="bold">1 - Le but du serveur</h3>
                        <p>Survis dans un monde hardcore en multijoueur le plus longtemps possible et tente d'être le
                            dernier survivant !
                            Un défi au sommet de la difficulté, pour les joueurs à la recherche de sensations fortes !
                        <h3 class="bold">2 - Comment bien commencer</h3>
                        <p>Afin de bien commencer ton aventure en serveur HardCore, assure-toi de te faire un minimum de stuff
                            pour être le mieux préparé possible
                            pour la nuit avec ses nombreux monstres qui voudront ta peau !
                            En HardCore, la difficulté est maximale, donc être bien équipé t'aidera dans ton aventure !</p>
                        <h2 class="st">Commandes :</h2>
                        <span class="bold">/info</span><span> : Pour voir tout type d'informations (épisode en cours, events en cours, ...)</span><br>
                        <span class="bold">/episode</span><span> : Pour connaître l'épisode actuel</span><br>
                    </div>
                </div>
                <br>
                <div class="docu-content">
                    <div class="docu">
                        <h2 class="underline" id="Creatif">Créatif</h2>
                        <h2>Présentation :</h2>
                        <h3 class="bold">Le but du serveur</h3>
                        <p>Le serveur créatif est un monde bac à sable où tu as la possibilité de faire des constructions
                            que tu peux reproduire en serveur Semi-RP
                            ou même build dans le seul but de la construction. C'est <span class="bold">toi</span> l'architecte !</p>
                        <h2 class="st">Commandes :</h2>
                        <span class="bold">/spawn</span><span> : Pour retourner au spawn</span><br>
                    </div>
                </div>
                <br>
                <div class="docu-content">
                    <div class="docu">
                        <h2 class="underline" id="ctoutpt">CTOUTPT.FR</h2>
                        <h2>Présentation :</h2>
                        <h3 class="bold">1 - Le but du serveur</h3>
                        <p>Sur ce serveur, tout est permis ! Il n'y a aucune règle, vous êtes donc dans l'anarchie la plus
                            totale. Bienvenue en Anarchie !</p>
                        <h3 class="bold">2 - Rejoindre le serveur</h3>
                        <span>Rejoins le serveur depuis le lobby ou à l'aide de l'ip</span><span class="bold"> play.ctoutpt.fr</span>.<br>
                        <span>Retrouve le site </span><a href="https://play.ctoutpt.fr">ici</a>.<br>
                    </div>
                </div>
                <br>
                <div class="docu-content">
                    <div class="docu">
                        <h2 class="underline" id="QR">Questions réponses</h2>
                        <span class="bold">- Le serveur est-il accessible aux cracks ?</span><br>
                        <span>Non, il ne l'est pas. Seulement les joueurs ayant Minecraft premium peuvent rejoindre le serveur.</span><br>
                        <span class="bold">- Le serveur est-il accessible aux versions bedrock ? (Win10, PE, ...)</span><br>
                        <span>Non, il ne l'est pas. Seulement les joueurs avec un compte Minecraft Java édition peuvent rejoindre le serveur.</span><br>
                        <span class="bold">- Le grief de bases, vol des ressources est-il autorisé ?</span><br>
                        <span>Non, le grief n'est pas autorisé et est même sanctionnable. Veuillez vous référer aux règles pour plus d'informations.</span><br>
                        <span class="bold">- Je ne peux pas me connecter au serveur, comment faire ?</span><br>
                        <span>Si tu ne peux pas te connecter au serveur, c'est que soit tu as rentré la mauvaise ip, soit le serveur est tout simplement hors-ligne.
                                        Rendez-vous sur le </span><span
                                style="color: #2C70BA; font-weight: bold;">Discord</span> <span> plus d'informations.</span><br>
                        <span class="bold">- Comment me connecter au serveur ?</span><br>
                        <span>Dans le menu de base de Minecraft, sélectionne "Multijoueur", puis clique sur "Nouveau Serveur". Ensuite, rentre le nom que tu veux,
                                         puis dans la section "Adresse du serveur", rentre l'adresse suivante :</span><span
                                class="bold"> play.noskillworld.fr</span><span>.
                        Enfin, appuis sur "terminé". Connecte-toi au serveur faisant un double-click dessus dans la liste des serveurs.
                        <br>C'est bon ! Passe un bon moment sur NoSkillWorld !</span><br>
                    </div>
                </div>
            </div>
            <br>
<?php
$pager->setFooter();
?>