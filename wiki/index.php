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
            <div class="main-top-col-wiki" id="top-semirp">
                <span><a href="" class="bold" style="color: black;">link 1</a></span>
            </div>
            <div class="main-top-col-wiki" id="top-hardcore">
                <span><a href="" class="bold" style="color: black;">link 2</a></span>
            </div>
            <div class="main-top-col-wiki" id="top-creatif">
                <span><a href="" class="bold" style="color: black;">link 3</a></span>
            </div>
            <div class="main-top-col-wiki" id="top-ctoutpt">
                <span><a href="" class="bold" style="color: black;">link 4</a></span>
            </div>
            <div class="main-top-col-wiki" id="top-qr">
                <span><a href="" class="bold" style="color: black;">link 5</a></span>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>