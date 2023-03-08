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
        <div class="table-of-contents-wiki">

        </div>
        <div class="wiki-article">

        </div>
    </div>

<?php
$pager->setFooter();
?>