<?php
require_once "../assets/php/messages.php";
require_once "assets/php/database/request.php";

$request = new PanelRequest();
$msg = new Messages();

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
                    <a href="menu" class="navbar-item-a
                    <?php
                    if ($page == "index.php") {
                        echo "active";
                    } else {
                        echo "not-active";
                    }
                    ?>">Menu</a>
                </li>
                <li class="navbar-item">
                    <a href="create-actu" class="navbar-item-a
                    <?php
                    if ($page == "create_actu.php") {
                        echo "active";
                    } else {
                        echo "not-active";
                    }
                    ?>">Nouvelle actu</a>
                </li>
                <li class="navbar-item">
                    <a href="create-event" class="navbar-item-a
                    <?php
                    if ($page == "create_event.php") {
                        echo "active";
                    } else {
                        echo "not-active";
                    }
                    ?>">Nouvel event</a>
                </li>
                <?php
                if (isset($_SESSION['admin']) && $request->isAdmin($_SESSION['admin'])) {
                    echo "<li class='navbar-item'>\n";
                    if ($page == "create_admin.php") {
                        echo "<a href='create-admin' class='navbar-item-a active'>Nouvel admin</a>\n";
                    } else {
                        echo "<a href='create-admin' class='navbar-item-a not-active'>Nouvel admin</a>\n";
                    }
                    echo "</li>";
                }
                ?>
                <hr id="responsive-separator">
                <?php
                echo "                <li class='navbar-item' id='nav-right'>\n";
                if (isset($_SESSION['admin']) && $_SESSION['admin'] != null) {
                    echo "                    <a href='login?disconnected' class='navbar-item-a not-active'>Se deconnecter</a>\n";
                } else {
                    echo "                    <a href='login' class='navbar-item-a ";
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
    $msg->printSuccess("disconnected");
    session_unset();
}
?>