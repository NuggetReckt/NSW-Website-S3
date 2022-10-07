<?php
$page = basename($_SERVER["PHP_SELF"]);
?>
    </head>
        <?php
        if ($page == "index.php") {
            echo "<body>";
        } else {
            echo "<body id='body-other'>";
        }
        ?>
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
                        <a href="<?php echo "wiki.php" ?>" class="<?php
                        if ($page == "wiki.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Wiki</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "votes.php" ?>" class="<?php
                        if ($page == "votes.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Votes</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "staff.php" ?>" class="<?php
                        if ($page == "staff.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Equipe</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo "cgu-cgv.php" ?>" class="<?php
                        if ($page == "cgu-cgv.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Regles</a>
                    </li>
                    <li class="navbar-item" id="nav-right">
                        <a href="https://play.noskillworld.fr/dynmap" target="_blank" class="not-active">Dynmap</a>
                    </li>
                    <li class="navbar-item" id="nav-right">
                        <a href="https://discord.gg/cE4eHEZWrD" target="_blank" class="not-active">Discord</a>
                    </li>
                    <li class="navbar-item" id="nav-right">
                        <a href="https://shop.noskillworld.fr" target="_blank" class="not-active">Boutique</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main>
        <div class="main-content">
