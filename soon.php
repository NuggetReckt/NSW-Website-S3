<?php
require_once "assets/php/pager.php";
$pager = new Pager("Soon");

$pager->setHeader();
?>
            <div class="top-content top-content-others" id="top-content-soon">
                <div class="top-title">
                    <h1 id="soon-title">Bientôt disponible...</h1>
                </div>
            </div>
<?php
$pager->setFooter();
?>
