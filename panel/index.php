<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Menu");

$pager->setHeader();

$request = new PanelRequest();

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
}

if (isset($_GET['actu_modified'])) {
    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Actu modifiée avec succès.</span>\n";
    echo "            </div>\n";
}

if (isset($err)) {
    if ($err == 2) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Les champs ne peuvent pas être vides !</span>\n";
        echo "            </div>\n";
    }
}

if (isset($_GET['logged'])) {
    $username = $_SESSION['admin'];

    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Connecté avec succès. Bienvenue, $username</span>\n";
    echo "            </div>\n";
}
?>

    <div class="top-content top-content-menu" id="top-content-menu">
        <div class="top-title-menu">
            <h1 id="menu-title">Panel</h1>
        </div>
    </div>
    <div class="manage-actus-content">
        <div class="manage-actus-title">
            <h1>Actus</h1>
        </div>
        <div class="manage-actus">
            <?php $request->get_actus()?>
        </div>
    </div>

<?php
$pager->setFooter();
?>
