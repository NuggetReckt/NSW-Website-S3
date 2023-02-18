<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Login");

$pager->setHeader();

// Variable
$username = filter_input(INPUT_POST, 'username', FILTER_UNSAFE_RAW);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);


if (isset($username) && isset($password)) {
    $request = new PanelRequest();
    $request->login($username, $password);
}
if (isset($err)) {

    switch ($err) {
        case 1:
            echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
            echo "                <span>Mot de passe ou utilisateur incorrect.</span>\n";
            echo "            </div>\n";
            break;
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
<div class="form" id="login-form">
    <form method="POST">
        <fieldset>
            <div class="form-content">
                <h1>Connection</h1>
                <label>Nom d'utilisateur<br>
                    <input type="text" name="username" class="input" placeholder="nom d'utilisateur" required="">
                </label>
                <br>
                <label>Mot de Passe<br>
                    <input type="password" name="password" class="input" placeholder="mot de passe" required="" id="password-input">
                </label>
                <label class="toggle-switch">
                    <input type="checkbox" onclick="onToggle()">
                    <span class="slider round"></span>
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