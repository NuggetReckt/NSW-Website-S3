<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new Pager("Projets");
$req = new Request();

$pager->setHeader();
?>
            <div class="top-content" id="top-content-projects">
                <div id="top-title">
                    <h1>Les Projets</h1>
                    <span>Découvrez les projets de </span><span style="color: #1394C3">No&Co</span><span> !</span>
                </div>
            </div>
            <div class="projects">
                <?php $req->get_projects()?>
            </div>
<?php
$pager->setFooter();
?>