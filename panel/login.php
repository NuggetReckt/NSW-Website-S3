<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Login");

$pager->setHeader();

if (isset($_POST["username"]) && isset($_POST["password"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $request = new PanelRequest();
    $request->login($username, $password);
}
if (isset($_GET['error'])) {
    $err = $_GET['error'];

    if ($err == 1) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Mot de passe ou utilisateur incorrect.</span>\n";
        echo "            </div>\n";
    }
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
}
?>
            <div class="form" id="login-form">
                <form action="login.php" method="POST">
                    <fieldset>
                        <div class="form-content">
                            <h1>Connection</h1>
                            <label>Nom d'utilisateur<br>
                                <input type="text" name="username" class="input" placeholder="nom d'utilisateur" required="">
                            </label>
                            <br>
                            <label>Mot de Passe<br>
                                <input type="password" name="password" class="input" placeholder="mot de passe" required="">
                            </label>
                            <br>
                            <input type="submit" value="Login">
                        </div>
                    </fieldset>
                </form>
            </div>
<?php
$pager->setFooter();
?>