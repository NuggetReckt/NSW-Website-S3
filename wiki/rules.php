<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Règles", false);

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>Règles du serveur</h1>
            <a href="/wiki">Revenir au Menu</a>
        </div>
    </div>
    <div class="wiki-content">
        <div class="table-of-contents-wiki" id="table-of-contents-wiki">
            <h3>Table des matières</h3>
            <ol class="table-wiki-list">
                <li class="table-wiki-item">
                    <a href="#1">Introduction</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#2">Lignes de conduite de la communauté</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3">En jeu</a>
                </li>
            </ol>
        </div>
        <div class="wiki-article">
            <div class="wiki-article-title">
                <h2 id="1">1. Introduction</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p">Ces règles forment une liste de clauses que tout joueur de NoSkillWorld se doit de
                        respecter, quel que soit son rang. Cette liste est sujette au changement, à la modification,
                        l'ajout ou la suppression de certaines de ses clauses. Toute l'équipe de modération de
                        NoSkillWorld est tenue au quotidien de veiller à ce que chacun.e les respecte, et chaque membre
                        de l'équipe de modération est libre d'appliquer les sanctions qu'il juge adéquates, à tout
                        moment, sans concerter les autres membres, en regard de son jugement personnel de telle ou telle
                        situation.</p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/caution.png" class="wiki-img-highlight wiki-img-highlight-warn"
                         alt="info">
                    <p class="wiki-p-highlight">Certaines règles particulières peuvent s'appliquer à certaines sections
                        particulières du serveur, comme lors d'évents, ou sur le serveur HardCore. Tous les joueurs sont
                        tenus de les respecter.</p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. Lignes de conduite de la communauté</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">Valables dans toutes les plateformes de discussion sous administration
                        directe de NoSkillWorld (incluant le chat en jeu du serveur, le serveur discord, et les réseaux
                        sociaux externes).</p>
                </div>
                <br>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step1.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Soyez respectueux envers tous les autres utilisateurs de NoSkillWorld.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step2.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Le langage haineux ou incitation à la haine, le harcèlement, et la
                        discrimination quelle que soit la forme est strictement prohibée.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step3.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Ne partagez et n'évoquez pas de contenu NSFW (Not Safe For Work), tel que des
                        images gores ou à caractère pornographique.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step4.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Minimisez l'usage d'un langage grossier ou d'insultes.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step5.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Respectez les décisions et les instructions des membres du staff.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step6.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Ne divulguez pas d'informations personnelles.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step7.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Évitez le flood et les messages répétitifs (spam).</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step8.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Ne faites pas de publicité pour des services externes à NoSkillWorld.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step9.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Ne mentionnez pas l'équipe du staff sans raison valable.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step1.png" class="wiki-img-rule"
                         alt="step">
                    <img src="../assets/images/step0.png" class="wiki-img-rule" style="margin-left: -6px"
                         alt="step">
                    <p class="wiki-p-step">Utilisez des noms de joueur, des images de profil et des skins
                        appropriés.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step1.png" class="wiki-img-rule"
                         alt="step">
                    <img src="../assets/images/step1.png" class="wiki-img-rule" style="margin-left: -6px"
                         alt="step">
                    <p class="wiki-p-step">De manière générale, ne conduisez pas d'action nuisant à l'expérience des
                        autres utilisateurs de NoSkillWorld.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step1.png" class="wiki-img-rule"
                         alt="step">
                    <img src="../assets/images/step2.png" class="wiki-img-rule" style="margin-left: -6px"
                         alt="step">
                    <p class="wiki-p-step">Sur le serveur Discord, les TOS (Terms Of Service) de Discord se doivent
                        d'être respectés, y compris le minimum d'âge de 13 ans.</p>
                </div>
                <div class="wiki-article-content">
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. En jeu</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">Concerne le serveur minecraft, comportant le Semi-RP, la FarmZone, le
                        Créatif, le serveur Event, et le HardCore.</p>
                </div>
                <br>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step1.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">La triche, quelle que soit la méthode employée, est strictement interdite sur
                        le serveur. La triche comprend toute pratique faisant intervenir ou non un logiciel externe,
                        permettant à un joueur de contourner des restrictions du jeu pour atteindre des objectifs
                        quelconque de manière non conventionnelle, injustement.<br>
                        <br>
                        🔹Voici quelques exemples de pratiques qui sont considérés comme de la triche sur NoSkillWorld
                        (donnés ici pour clarifier tous doutes les concernant, ces exemples sont loin de former une
                        liste exhaustive, tout autre type de triche étant bien évidemment tout autant sanctionné) :<br>
                        - L'utilisation d'un X-Ray<br>
                        - L'utilisation de macros pour automatiser le farming<br>
                        - L'utilisation de mods permettant de trouver plus rapidement certaines structures ou biomes<br>
                        <br>
                        🔹Voici quelques exemples, a contrario, de pratiques autorisées sur NoSkillWorld :<br>
                        - L'utilisation d'une minimap<br>
                        - L'utilisation d'une méthode non conventionnelle permettant d'augmenter la luminosité du jeu
                        (mods de brightness, gamma, texture packs, ...)<br>
                        - L'utilisation d'un mod de schematics (Schematica, Litematica, ...)</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step2.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Le grief est strictement interdit sur le serveur. Respectez les constructions
                        des autres joueurs et ne les modifiez pas sans autorisation.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step3.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Le vol de ressources est strictement interdit sur le serveur. Ne vous servez
                        pas dans les possessions d'un joueur sans son accord.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step4.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Les farms à mobs sont autorisées sur le serveur, sous certaines conditions
                        :<br>
                        <br>
                        🔹Toute farm doit être construite dans un claim protégé. <a href="lands" class="underline">Voir
                            le wiki des Lands</a>.<br>
                        <br>
                        🔹Une farm afk ("Away From Keyboard", aka un dispositif de farming pouvant fonctionner sans
                        l'intervention directe et continue d'un joueur) ne devrait en aucun cas vous permettre de gagner
                        de l'xp dans votre job, ou dans n'importe quel autre système de progression non vanilla qui
                        pourrait être ajoutée dans le futur.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step5.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Ne construisez pas votre base à côté (distance relative à la subjectivité
                        du/des concerné.es et des membres de l'équipe de modération) d'un autre joueur sans son
                        accord.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step6.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Ne construisez pas de structures inappropriées ou provocantes, que ce soit
                        dans un espace privé ou public.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step7.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Le PvP n'est pas interdit sur le serveur, mais il doit toujours se faire dans
                        un cadre sain, sous le consentement éclairé et enthousiaste des deux parties. Certaines
                        pratiques en particulier sont strictement prohibées :<br>
                        <br>
                        🔹Le tp kill : téléporter un autre joueur à sa position dans le but de le tuer.<br>
                        <br>
                        🔹Le spawn kill : tuer en boucle un autre joueur.<br>
                        <br>
                        🔹Bien évidemment, l'utilisation d'un logiciel externe pour gagner un avantage en PvP est
                        également compris dans les types de triches interdites.</p>
                </div>
                <div class="wiki-article-content-rules">
                    <img src="../assets/images/step8.png" class="wiki-img-rule"
                         alt="step">
                    <p class="wiki-p-step">Privilégiez le serveur FarmZone pour récolter des ressources, essayez
                        toujours de laisser le monde du serveur Semi-RP aussi propre que possible. À noter que les
                        minerais de diamant et de netherite ne se génèrent pas en serveur Semi-RP.</p>
                </div>
            </div>
            <br>
            <br>
            <p>Dernière actualisation le <span class="wiki-command-exemple">10/06/2024</span>.</p>
        </div>
    </div>

<?php
$pager->setFooter();
?>