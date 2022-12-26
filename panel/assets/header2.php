<?php
$page = basename($_SERVER["PHP_SELF"]);
session_start();
?>
    </head>
    <body id="body-other">
    <button class="responsive-nav-toggle" aria-controls="navbar-list" aria-expanded="false"></button>
    <div class="navbar-content">
        <nav id="navbar">
            <ul class="navbar-list" data-visible="false">
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
                <hr id="responsive-separator">
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