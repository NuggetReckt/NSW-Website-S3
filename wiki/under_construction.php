<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("En construction");

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-constr">
        <div class="top-title">
            <h1 id="error-title">Page en cours de construction...</h1>
        </div>
        <div class="error-subtitle">
            <a href="/wiki" id="back-link">Revenir au menu</a>
        </div>
    </div>

<?php
$pager->setFooter();
?>
