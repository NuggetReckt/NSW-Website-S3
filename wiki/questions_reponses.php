<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Questions/Réponses", false);

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>Questions/Réponses</h1>
            <a href="/wiki">Revenir au Menu</a>
        </div>
    </div>
    <div class="wiki-content">
        <div class="table-of-contents-wiki">
            <h3>Table des matières</h3>
            <ol class="table-wiki-list">
                <li class="table-wiki-item">
                    <a href="#1">Questions techniques</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#2">Nos atouts</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3">Notre politique</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#4">Les événements</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#5">Autres</a>
                </li>
            </ol>
        </div>
        <div class="wiki-article">
            <div class="wiki-article-title">
                <h2 id="1">1. Questions techniques</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="qr-content">
                    <h3 class="qr-question">Le serveur est-il accessible aux cracks ?</h3>
                    <h3 class="qr-answer">Non, le serveur est seulement accessible pour les joueurs ayant un compte
                        Minecraft Premium.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Le serveur accepte-t-il les versions bedrock ? (Win10, PE,...)</h3>
                    <h3 class="qr-answer">Non, le serveur est seulement accessible pour les joueurs munis d'un client
                        Minecraft Java.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Quelle est l’ip du serveur ?</h3>
                    <h3 class="qr-answer">Rejoins le serveur à l'aide de l'ip
                        <span class="bold">play.noskillworld.fr</span>.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Quelle est la version de Minecraft requise pour rejoindre le serveur ?</h3>
                    <h3 class="qr-answer">Pour rejoindre le serveur, la version requise actuelle est la 1.21.1.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Comment me connecter au serveur ?</h3>
                    <h3 class="qr-answer">Dans le menu principal de Minecraft, sélectionne "Multijoueur", puis clique
                        sur "Nouveau Serveur". Ensuite, rentre le nom que tu veux, et dans la section "Adresse du
                        serveur", rentre l'ip suivante : <span class="bold">play.noskillworld.fr</span>. Enfin,
                        appuie sur "terminé". Connecte-toi au serveur en faisant un double-click dessus dans la liste
                        des serveurs. C'est bon ! Passe un bon moment sur NoSkillWorld !
                    </h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Je ne peux pas me connecter au serveur, comment faire ?</h3>
                    <h3 class="qr-answer">Si tu ne peux pas te connecter au serveur, c'est que soit tu as
                        rentré la mauvaise ip, soit le serveur est tout simplement hors ligne. Rends-toi sur le
                        <a href="https://discord.noskillworld.fr" target="_blank" class="underline">Discord</a> pour
                        plus d'informations.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Combien de slots (emplacements) le serveur peut-il accueillir ?</h3>
                    <h3 class="qr-answer">Le serveur peut accueillir au total 100 joueurs maximum. Cependant, le nombre
                        de slots est réduit à 40 sur les serveurs comme le Semi-RP par exemple afin d'éviter le lag au
                        maximum. Le nombre de joueurs que le serveur peut accueillir est susceptible de changer à tout
                        moment en fonction de l'affluence.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Dois-je obligatoirement installer des mods spécifiques pour jouer sur le
                        serveur ?</h3>
                    <h3 class="qr-answer">Non, aucun. NoSkillWorld n'est pas un serveur moddé. Cependant, tu peux
                        rejoindre le serveur avec des mods installés sur ton client, tout en respectant les
                        <a href="regles" class="underline"> règles du serveur</a>.</h3>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. Nos atouts</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="qr-content">
                    <h3 class="qr-question">Existe-t-il un système d’économie sur le serveur ?</h3>
                    <h3 class="qr-answer">Oui ! Et il inclut la possibilité de créer des warps
                        (<a href="warpplayer" class="underline">voir le wiki des WarpPlayers</a>),
                        d'acheter des claims (<a href="lands.php" class="underline">voir le wiki des Lands</a>),
                        acheter des items dans l'Hotel des Ventes
                        (<a href="hdv" class="underline">voir le wiki de l'HDV</a>) et bien d'autres !</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Y a-t-il un système de protection des constructions des joueurs ?</h3>
                    <h3 class="qr-answer">Oui ! Voir le <a href="lands" class="underline">wiki des
                            Lands</a> pour plus d'informations.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Quels sont les différents modes de jeu proposés sur le serveur ?</h3>
                    <h3 class="qr-answer">Sur NoSkillWorld, tu peux retrouver comme mode de jeu principal le Semi-RP, le
                        HardCore (<a href="hardcore" class="underline">voir le wiki</a>), ainsi que le Créatif.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Le serveur dispose-t-il d'une carte interactive afin de visualiser les
                        constructions des joueurs sur le serveur ?</h3>
                    <h3 class="qr-answer">Oui, retrouve la Dynmap
                        <a href="https://dynmap.noskillworld.fr" class="underline">ici</a>.</h3>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. Notre politique</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="qr-content">
                    <h3 class="qr-question">Le serveur est-il uniquement francophone ?</h3>
                    <h3 class="qr-answer">Oui, le langage principal utilisé sur le serveur et sur toutes ses plateformes
                        de communication (discord, réseaux, ...) est le français. </h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Y a-t-il des restrictions ou des limitations particulières concernant les
                        constructions des joueurs, sur les entités et objets sur le serveur ?</h3>
                    <h3 class="qr-answer">Oui, et elles sont référencées
                        <a href="regles" class="underline">ici</a>.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Existe-t-il des règles spécifiques au serveur ?</h3>
                    <h3 class="qr-answer">Oui, et elles sont disponibles
                        <a href="regles" class="underline">ici</a>.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Le grief, vol de ressources est-il autorisé ?</h3>
                    <h3 class="qr-answer">Non, il ne l'est pas et peut même être sanctionné. Voir les
                        <a href="regles" class="underline">règles</a> pour plus d'informations.
                    </h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Comment sont traités les problèmes de triche ou de comportement
                        inapproprié sur le serveur ?</h3>
                    <h3 class="qr-answer">Sur le serveur, toute action (directe ou indirecte) pouvant nuire aux autres
                        joueurs est sanctionnée. Que ce soit de la tricherie ou des insultes dans le chat, ces actions
                        sont sanctionnées. Voir les <a href="regles" class="underline">règles</a> pour plus
                        d'informations.
                    </h3>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="4">4. Les événements</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="qr-content">
                    <h3 class="qr-question">Quels sont les types d'événements organisés sur le serveur ?</h3>
                    <h3 class="qr-answer">Event build, jump, pvp, cache-cache, ... Les possibilités d'évents possibles
                        sont infinies ! Chaque évent que nous proposons à la communauté a été préparé avec soin pour
                        l'occasion pour proposer des évents toujours plus funs !</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Le serveur organise-t-il des compétitions ou des tournois entre joueurs
                        ?</h3>
                    <h3 class="qr-answer">Oui, lors des events. Il est par ailleurs possible que des récompenses soient
                        offertes aux gagnants.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Comment participer à ces événements ?</h3>
                    <h3 class="qr-answer">Les events sont joignables par n'importe qui, sauf indication contraire. Il te
                        suffit de te connecter au serveur et de te rendre sur le serveur event. Facile, non ?</h3>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="5">5. Autres</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="qr-content">
                    <h3 class="qr-question">Comment puis-je devenir membre du staff du serveur ?</h3>
                    <h3 class="qr-answer">Si tu souhaites faire partie de l'équipe, tu es le bienvenu ! Il te suffira de
                        créer un ticket sur notre
                        <a href="https://discord.noskillworld.fr" target="_blank" class="underline">Discord</a>
                        et de rédiger ta candidature en indiquant ton pseudo in-game, ton prénom IRL, une brève
                        présentation IRL et in-game, tes compétences pour le poste auquel tu postules, tes motivations,
                        pourquoi NoSkillWorld et pas un autre serveur, ... À la suite de ta candidature, si tu es
                        retenu, il s'ensuivra un entretien oral entre les membres de l'administration et toi. Il est
                        cependant important de noter que le double staff est interdit (dépend du poste auquel tu as
                        postulé) et que tu dois avoir au minimum 2 heures de jeu sur le serveur.</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Quels sont les avantages pour les joueurs ayant acheté un grade sur la
                        boutique ?</h3>
                    <h3 class="qr-answer">Nous avons fait en sorte que les grades achetés soient le moins PayToWin
                        possible et encore moins PayToPlay. L'achat d'un grade propose des contreparties majoritairement
                        cosmétiques</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Comment puis-je être mis au courant des dernières nouveautés sur le
                        serveur ?</h3>
                    <h3 class="qr-answer">Principalement sur
                        <a href="https://discord.noskillworld.fr" target="_blank" class="underline">Discord</a>, mais
                        également via la section "<a href="/accueil#actus" class="underline">Actualités</a>"
                        sur la page d'accueil ou encore nos différents réseaux sociaux
                        (<a href="https://instagram.com/noskillworld" target="_blank" class="underline">Instagram</a>,
                        <a href="https://twitter.com/noskillworld" target="_blank" class="underline">Twitter</a> ou
                        <a href="https://tiktok.com/noskillworld_mc" target="_blank" class="underline">TikTok</a>.)</h3>
                </div>
                <div class="qr-content">
                    <h3 class="qr-question">Quels sont les outils de communication mis à disposition pour vous
                        permettre communiquer entre vous ?</h3>
                    <h3 class="qr-answer">Le <a href="https://discord.noskillworld.fr" target="_blank"
                                                class="underline">Discord</a>
                        est la principale manière pour communiquer entre membres de la communauté. Il est bien sûr
                        ouvert à tous.</h3>
                </div>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>