<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "../assets/php/messages.php";
$pager = new PanelPager("Login");

$pager->setHeader();

$request = new PanelRequest();
$msg = new Messages();

$username = filter_input(INPUT_POST, 'username', FILTER_UNSAFE_RAW);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

if (isset($username) && isset($password)) {
    $request->login($username, $password);
}

if (isset($err)) {
    $msg->printError($err);
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