<?php
require_once "assets/php/pager.php";
$pager = new Pager("Règles");

$pager->setHeader();
?>

    <div class="top-content" id="top-content-rules">
        <div class="top-title">
            <h1 id="rules-title">Conditions Générales d'Utilisation</h1>
        </div>
    </div>

<?php
$pager->setFooter();
?>
