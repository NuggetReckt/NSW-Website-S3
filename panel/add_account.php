<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Nouveau Compte");

$pager->setHeader();

$request = new PanelRequest();

if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password-confirm"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password-confirm"];

    $request->create_account($username, $password, $password_confirm);
}
if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
}

if (isset($_GET['account_created'])) {
    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Compte créé avec succès.</span>\n";
    echo "            </div>\n";
}

if (isset($_GET['error'])) {
    $err = $_GET['error'];

    if ($err == 2) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Les champs ne peuvent pas être vides !</span>\n";
        echo "            </div>\n";
    }
    if ($err == 3) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Vous n'êtes pas connecté.</span>\n";
        echo "            </div>\n";
    }
    if ($err == 4) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Les deux mots de passe ne sont pas identiques !</span>\n";
        echo "            </div>\n";
    }
}
?>
            <div class="form" id="create-form">
                <form action="add_account.php" method="POST">
                    <fieldset>
                        <div class="form-content">
                            <h1>Créer un compte utilisateur</h1>
                            <label>Nom d'utilisateur<br>
                                <input type="text" name="username" class="input" placeholder="Nom d'utilisateur" required="">
                            </label>
                            <br>
                            <label>Mot de passe<br>
                                <input type="password" name="password" class="input" placeholder="Mot de passe" required="">
                            </label>
                            <br>
                            <label>Confirmation du mot de passe<br>
                                <input type="password" name="password-confirm" class="input"
                                       placeholder="Confirmer le mot de passe" required="">
                            </label>
                            <br>
                            <input type="submit" value="Créer le compte">
                        </div>
                    </fieldset>
                </form>
            </div>
<?php
$pager->setFooter();
?>