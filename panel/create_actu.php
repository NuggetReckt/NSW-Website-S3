<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "../assets/php/messages.php";
$pager = new PanelPager("Nouvelle Actu");

$pager->setHeader();

// Variable POST/GET
$actu_name = filter_input(INPUT_POST, 'actu-name', FILTER_SANITIZE_SPECIAL_CHARS);
$actu_desc = filter_input(INPUT_POST, 'actu-desc', FILTER_SANITIZE_SPECIAL_CHARS);
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();
$msg = new Messages();

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == null) {
        header("Location: login?error=3");
    }
} else {
    $_SESSION['admin'] = null;
    header("Location: login?error=3");
}

if (isset($actu_name) && isset($actu_desc)) {
    $request->create_actu($actu_name, $actu_desc);
}

if (isset($_GET['actu_created'])) {
    $msg->printSuccess("actu_created");
}

if (isset($err)) {
    $msg->printError($err);
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