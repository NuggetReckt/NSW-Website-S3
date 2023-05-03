<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Template");

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>Template</h1>
            <a href="/wiki">Revenir au Menu</a>
        </div>
    </div>
    <div class="wiki-content">
        <div class="table-of-contents-wiki" id="table-of-contents-wiki">
            <h3>Table des matières</h3>
            <ol class="table-wiki-list">
                <li class="table-wiki-item">
                    <a href="#1"> </a>
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
                <h2 id="1">1. </h2>
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
                    <p class="wiki-p">Normal paragraph</p>
                </div>
                <div class="wiki-article-content">
                    <p class="wiki-p"><a class="underline" href="#">Link</a></p>
                </div>
                <div class="wiki-article-content">
                    <p class="wiki-p"><span class="wiki-command-exemple">command exemple</span></p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/no-entry.png" class="wiki-img-highlight wiki-img-highlight-forbidden"
                         alt="info">
                    <p class="wiki-p-highlight">Highlight forbidden</p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/caution.png" class="wiki-img-highlight wiki-img-highlight-warn"
                         alt="info">
                    <p class="wiki-p-highlight">Highlight caution</p>
                </div>
                <div class="wiki-article-content">
                    <img src="../assets/images/information-point.png" class="wiki-img-highlight wiki-img-highlight-info"
                         alt="info">
                    <p class="wiki-p-highlight">Highlight information</p>
                </div>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. </h2>
                <hr>
            </div>
            <div class="wiki-article-wrapper">
                <div class="wiki-article-content-centered">
                    <div class="wiki-subsection" id="img1" onclick="enhanceImg('img1')">
                        <img src="../assets/images/background.png" class="wiki-img-exemple" alt="gui1-img">
                        <p class="wiki-p-img-legend">Image 1</p>
                    </div>
                    <div class="wiki-subsection" id="img2" onclick="enhanceImg('img2')">
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