<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Nouvelle Actu");

$pager->setHeader();

// Variable POST/GET
$actu_name = filter_input(INPUT_POST, 'actu-name', FILTER_SANITIZE_SPECIAL_CHARS);
$actu_desc = filter_input(INPUT_POST, 'actu-desc', FILTER_SANITIZE_SPECIAL_CHARS);
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();

if (isset($actu_name) && isset($actu_desc)) {
    $request->create_actu($actu_name, $actu_desc);
}

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
    exit();
}

if (isset($_GET['actu_created'])) {
    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Actu créée avec succès.</span>\n";
    echo "            </div>\n";
}

if (isset($err)) {

    switch ($err) {
        case 2:
            echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
            echo "                <span>Les champs ne peuvent pas être vides !</span>\n";
            echo "            </div>\n";
            break;
        case 3:
            echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
            echo "                <span>Vous n'êtes pas connecté.</span>\n";
            echo "            </div>\n";
            break;
    }
}
?>
    <div class="form" id="actu-form">
        <form action="create_actu.php" method="POST">
            <fieldset>
                <div class="form-content">
                    <h1>Créer une actu</h1>
                    <label>Titre de l'actu<br>
                        <input type="text" name="actu-name" class="input" placeholder="Titre de l'actualité"
                               required="">
                    </label>
                    <br>
                    <label>Actu<br>
                        <textarea name="actu-desc" rows="6" required="" placeholder="Votre actu"></textarea>
                    </label>
                    <br>
                    <input type="submit" value="Créer l'actu">
                </div>
            </fieldset>
        </form>
    </div>
<?php
$pager->setFooter();
?>