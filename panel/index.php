<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Menu");

$pager->setHeader();

$request = new PanelRequest();

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
}

if (isset($_GET['logged'])) {
    $username = $_SESSION['admin'];

    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Connecté avec succès. Bienvenue, $username</span>\n";
    echo "            </div>\n";
}
?>



<?php
$pager->setFooter();
?>
