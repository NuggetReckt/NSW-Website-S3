<?php
$page = basename($_SERVER["PHP_SELF"]);
session_start();
?>
    </head>
    <body>
        <div class="navbar-content">
            <nav id="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="<?php echo "index.php" ?>" class="<?php
                        if ($page == "index.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Accueil</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "films.php" ?>" class="<?php
                        if ($page == "films.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Les films</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "actus.php" ?>" class="<?php
                        if ($page == "actus.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Actualités</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "music.php" ?>" class="<?php
                        if ($page == "music.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Musiques</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "contact.php" ?>" class="<?php
                        if ($page == "contact.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Nous contacter</a>
                    </li>
                    <?php
                    echo "<li class='navbar-item' id='nav-right'>\n";
                    if (isset($_SESSION['user'])) {
                        if ($_SESSION['user'] != null) {
                            echo "<a href='login.php?disconnected'>Me déconnecter</a>\n";
                        }
                    } else {
                        echo "                        <a href='login.php' class='";
                        if ($page == "login.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        echo "'>Mon espace personnel</a>\n";
                    }
                    echo "                    </li>\n";
                    ?>
                </ul>
            </nav>
        </div>
        <main>
        <div class="main-content">
