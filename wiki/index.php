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
                    <img src="../assets/images/axe.png" alt="jobs-icon">
                    <span>Jobs</span>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-lands">
                <a href="lands.php" class="bold">
                    <img src="../assets/images/tent.png" alt="lands-icon">
                    <span>Lands</span>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-wp">
                <a href="warpplayer.php" class="bold">
                    <img src="../assets/images/black-hole.png" alt="wp-icon">
                    <span>WarpPlayer</span>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-hdv">
                <a href="hdv.php" class="bold">
                    <img src="../assets/images/price.png" alt="hdv-icon">
                    <span>Hôtel Des Ventes</span>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-hc">
                <a href="hardcore.php" class="bold">
                    <img src="../assets/images/heartbeat.png" alt="hc-icon">
                    <span>HardCore</span>
                </a>
            </div>
            <div class="main-top-col-wiki" id="wiki-lore">
                <a href="lore.php" class="bold">
                    <img src="../assets/images/literature.png" alt="lore-icon">
                    <span>Lore</span>
                </a>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>