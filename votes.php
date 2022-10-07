<?php
require_once "assets/php/pager.php";
$pager = new Pager("Votes");

$pager->setHeader();
?>

    <div id="votes-content">
        <div class="top-content" id="top-content-votes">
            <div class="top-title">
                <h1 id="votes-title">Voter pour le serveur</h1>
            </div>
        </div>
        <div id="votes-links">
            <h3 id="h3-vote">Lien 1 :
                <a target="_blank" href="https://www.serveurs-minecraft.org/vote.php?id=60934">Serveurs-Minecraft.org</a>
            </h3>
            <h3 id="h3-vote">Lien 2 :
                <a target="_blank" href="https://serveur-minecraft.com/2598">Serveur-Minecraft.com</a>
            </h3>
            <h3 id="h3-vote">Lien 3 :
                <a target="_blank" href="https://serveurs-mc.net/index.php/serveur/251">Serveurs-mc.net</a>
            </h3>
            <h3 id="h3-vote">Lien 4 :
                <a target="_blank" href="https://top-serveurs.net/minecraft/vote/noskillworld">Top-serveurs.net</a>
            </h3>
            <h3 id="h3-vote">Lien 5 :
                <a target="_blank" href="https://serveur-prive.net/minecraft/noskillworld-9550/vote">Serveur-prive.net</a>
            </h3>
            <h3 id="h3-vote">Lien 6 :
                <a target="_blank" href="https://www.serveursminecraft.org/serveur/5870/">serveursminecraft.org</a>
            </h3>
            <h3 id="h3-vote">Lien 7 :
                <a target="_blank" href="https://www.liste-serveurs-minecraft.org/?post_type=listing_type&p=203283">liste-serveurs-minecraft.org</a>
            </h3>
        </div>
        <br>
    </div>

<?php
$pager->setFooter();
?>
