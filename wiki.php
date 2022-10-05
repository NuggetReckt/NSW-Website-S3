<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new Pager("Wiki");
$req = new Request();

$pager->setHeader();
?>
            <div class="top-content" id="top-content-wiki">
                <div class="top-title">
                </div>
            </div>
<?php
$pager->setFooter();
?>