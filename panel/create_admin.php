<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "../assets/php/messages.php";
$pager = new PanelPager("Nouvel Admin");

$pager->setHeader();

//Variables POST/GET
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
$permission = filter_input(INPUT_POST, 'permission', FILTER_SANITIZE_SPECIAL_CHARS);
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();
$msg = new Messages();

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
    exit();
}

if (isset($username) && isset($password) && isset($permission)) {
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $request->create_admin($username, $hashed, $permission);
}

if (isset($_GET['admin_created'])) {
    $msg->printSuccess("admin_created");
}

if (isset($err)) {
    $msg->printError($err);
}
?>
    <div class="form" id="admin-form">
        <form action="create_admin.php" method="POST">
            <fieldset>
                <div class="form-content">
                    <h1>Créer un compte administrateur</h1>
                    <label>Nom d'utilisateur<br>
                        <input type="text" name="username" class="input" placeholder="Nom d'utilisateur"
                               required="">
                    </label>
                    <br>
                    <label>Mot de passe<br>
                        <input type="text" name="password" class="input" placeholder="Mot de passe"
                               required="">
                    </label>
                    <label>Permission<br>
                        <input type="text" name="permission" class="input" placeholder="Permission"
                               list="permissions" required="">
                        <datalist id="permissions">
                            <option value="admin">
                            <option value="staff">
                        </datalist>
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