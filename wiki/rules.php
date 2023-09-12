<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Règles");

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
                    <a href="#2"> </a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3"> </a>
                </li>
                <li class="table-wiki-item">
                    <a href="#4"> </a>
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
                    <p class="wiki-p"></p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. </h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p"></p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. </h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content">
                    <p class="wiki-p"></p>
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
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>