<?php
$page = basename($_SERVER["PHP_SELF"]);
session_start();
?>
    </head>
    <div class="navbar-content">
        <nav id="navbar">
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="<?="index.php"?>" class="navbar-item-a
                    <?php
                    if ($page == "index.php") {
                        echo "active";
                    } else {
                        echo "not-active";
                    }
                    ?>">Menu</a>
                </li>
                <li class="navbar-item">
                    <a href="<?="add_actu.php"?>" class="navbar-item-a
                    <?php
                    if ($page == "add_actu.php") {
                        echo "active";
                    } else {
                        echo "not-active";
                    }
                    ?>">Nouvelle actu</a>
                </li>
                <?php
                echo "                <li class='navbar-item' id='nav-right'>\n";
                if (isset($_SESSION['admin'])) {
                    if ($_SESSION['admin'] != null) {
                        echo "                    <a href='login.php?disconnected' class='navbar-item-a not-active'>Se deconnecter</a>\n";
                    }
                } else {
                    echo "                    <a href='login.php' class='navbar-item-a ";
                    if ($page == "login.php") {
                        echo "active";
                    } else {
                        echo "not-active";
                    }
                    echo "'>Login</a>\n";
                }
                echo "                </li>\n";
                ?>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <main>
<?php
if (isset($_GET['disconnected'])) {
    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Vous avez été déconnecté avec succès.</span>\n";
    echo "            </div>\n";

    session_unset();
}
?>