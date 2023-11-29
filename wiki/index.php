<?php

require_once "assets/php/pager.php";
$pager = new WikiPager("Menu");

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-title">
            <h1 id="wiki-title">Bienvenue sur le Wiki de NoSkillWorld !</h1>
        </div>
    </div>
    <div id="wiki-nav">
        <div id="row">
            <div class="main-top-col-wiki" id="wiki-jobs">
                <a href="jobs.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/axe.png" alt="jobs-icon">
                        <span>Jobs</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-lands">
                <a href="lands.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/tent.png" alt="lands-icon">
                        <span>Lands</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-wp">
                <a href="warpplayer.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/black-hole.png" alt="wp-icon">
                        <span>WarpPlayer</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-hdv">
                <a href="hdv.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/price.png" alt="hdv-icon">
                        <span>Hôtel Des Ventes</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-homes">
                <a href="homes.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/house.png" alt="homes-icon">
                        <span>Homes</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-hc">
                <a href="hardcore.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/heartbeat.png" alt="hc-icon">
                        <span>HardCore</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-lore">
                <a href="lore.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/literature.png" alt="lore-icon">
                        <span>Lore</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-mumble">
                <a href="mumble.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/headphones.png" alt="mumble-icon">
                        <span>Mumble</span>
                    </div>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-qr">
                <a href="questions-reponses.php" class="bold">
                    <div class="wiki-nav-item-content">
                        <img src="../assets/images/search.png" alt="qr-icon">
                        <span>Questions/Réponses</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="credits-icons">
        <span>Beautiful icons by Freepik on <a href="https://flaticon.com" target="_blank">flaticon.com</a></span>
    </div>

<?php
$pager->setFooter();
?>