<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Modifcation Actu");

$pager->setHeader();

// Variable POST/GET
$actu_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$actu_name = filter_input(INPUT_POST, 'actu-name', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
$actu_desc = filter_input(INPUT_POST, 'actu-desc', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();

if (isset($actu_name) || isset($actu_desc)) {
    $request->modify_actu($actu_id, $actu_name, $actu_desc);
}

$actuData = $request->get_actus_id_name_desc($actu_id);

$actu_name = filter_input(INPUT_POST, 'actu-name', FILTER_SANITIZE_SPECIAL_CHARS) ?? $actuData['name'];
$actu_desc = filter_input(INPUT_POST, 'actu-desc', FILTER_SANITIZE_SPECIAL_CHARS) ?? $actuData['description'];


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
        <form method="POST">
            <fieldset>
                <div class="form-content">
                    <h1>Modifier une actu</h1>
                    <label>Titre de l'actu<br>
                        <input type="text" name="actu-name" class="input" placeholder="Titre de l'actualité" value="<?= $actu_name ?>">
                    </label>
                    <br>
                    <label>Actu<br>
                        <textarea name="actu-desc" rows="6" placeholder="Votre actu"><?= $actu_desc ?></textarea>
                    </label>
                    <br>
                    <input type="submit" value="Modifier l'actu">
                </div>
            </fieldset>
        </form>
    </div>
<?php
$pager->setFooter();
?>