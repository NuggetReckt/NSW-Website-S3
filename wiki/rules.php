<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Règles", true);

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
                        l’ajout ou la suppression de certaines de ses clauses. Toute l’équipe de modération de
                        NoSkillWorld est tenue au quotidien de veiller à ce que chacun.e les respecte, et chaque membre
                        de l’équipe de modération est libre d’appliquer les sanctions qu’il juge adéquates, à tout
                        moment, sans concerter les autres membres, en regard de son jugement personnel de telle ou telle
                        situation.</p>
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
                <div class="wiki-article-content">
                    <p class="wiki-p"></p>
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
                <div class="wiki-article-content">
                    <p class="wiki-p"></p>
                </div>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>