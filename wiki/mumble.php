<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Mumble");

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
                    <a href="#3">Installation / Configuration</a>
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
                    <p class="wiki-p">Mumble est un logiciel gratuit et open source pour la communication vocale de
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
                        - Avoir les accès d'administrateur
                    </p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">
                        Si utilisation d'un client quelconque comprenant le MumbleLink (Lunar, Badlion,...) :<br>
                        - MumbleLink Activé<br>
                        <br>
                        Si utilisation du client Fabric :<br>
                        - Fabric en version 1.18.2<br>
                        - Le mod MumbleLink pour Fabric
                    </p>
                </div>
                <div class="wiki-article-content">
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. Installation / Configuration</h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content-centered">
                    <div class="wiki-subsection">
                        <img src="../assets/images/background.png" class="wiki-img-exemple" alt="gui1-img">
                        <p class="wiki-p-img-legend">Image 1</p>
                    </div>
                    <div class="wiki-subsection">
                        <img src="../assets/images/background.png" class="wiki-img-exemple" alt="gui2-img">
                        <p class="wiki-p-img-legend">Image 2</p>
                    </div>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="4">4. </h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p"></p>
                </div>
                <div class="wiki-article-content">
                    <p class="wiki-p"></p>
                </div>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>