<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "../assets/php/messages.php";
$pager = new PanelPager("Modification Actu");

$pager->setHeader();

// Variable POST/GET
$actu_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$event_name = filter_input(INPUT_POST, 'actu-name', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
$actu_desc = filter_input(INPUT_POST, 'actu-desc', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();
$msg = new Messages();

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
    exit();
}

if (isset($event_name) || isset($actu_desc)) {
    $request->modify_actu($actu_id, $event_name, $actu_desc);
}

$actuData = $request->get_actus_id_name_desc($actu_id);

$event_name = filter_input(INPUT_POST, 'actu-name', FILTER_SANITIZE_SPECIAL_CHARS) ?? $actuData['name'];
$actu_desc = filter_input(INPUT_POST, 'actu-desc', FILTER_SANITIZE_SPECIAL_CHARS) ?? $actuData['description'];

if (isset($_GET['actu_modified'])) {
    $msg->printSuccess("actu_modified");
}

if (isset($err)) {
    $msg->printError($err);
}
?>
    <div class="form" id="actu-form">
        <form method="POST">
            <fieldset>
                <div class="form-content">
                    <h1>Modifier une actu</h1>
                    <label>Titre de l'actu<br>
                        <input type="text" name="actu-name" class="input" placeholder="Titre de l'actualité"
                               value="<?= $event_name ?>">
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