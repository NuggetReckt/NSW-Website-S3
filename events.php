<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new Pager("Events");
$request = new Request();

$pager->setHeader();
?>
            <div class="top-content top-content-others" id="top-content-events">
                <div class="top-title">
                    <h1 id="events-title">Events à venir</h1>
                </div>
            </div>
            <div class="events-wrapper">
                <?php $request->get_events();?>
            </div>
<?php
$pager->setFooter();
?>
