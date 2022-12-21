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
        <button class="responsive-nav-toggle" aria-controls="navbar-list" aria-expanded="false"></button>
        <div class="navbar-content">
            <nav>
                <ul class="navbar-list" data-visible="false">
                    <li class="navbar-item">
                        <a href="<?="index.php"?>" class="navbar-item-a
                        <?php
                        if ($page == "index.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Accueil</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="wiki.php"?>" class="navbar-item-a
                        <?php
                        if ($page == "wiki.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Wiki</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="votes.php"?>" class="navbar-item-a
                        <?php
                        if ($page == "votes.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Votes</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="staff.php"?>" class="navbar-item-a
                        <?php
                        if ($page == "staff.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Equipe</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="cgu-cgv.php"?>" class="navbar-item-a
                        <?php
                        if ($page == "cgu-cgv.php") {
                            echo "active";
                        } else {
                            echo "not-active";
                        }
                        ?>">Regles</a>
                    </li>
                    <hr id="responsive-separator" aria-expanded="false">
                    <li class="navbar-item" id="nav-right">
                        <a href="https://play.noskillworld.fr/dynmap" target="_blank" class="navbar-item-a not-active">Dynmap</a>
                    </li>
                    <li class="navbar-item" id="nav-right">
                        <a href="https://discord.gg/cE4eHEZWrD" target="_blank" class="navbar-item-a not-active">Discord</a>
                    </li>
                    <li class="navbar-item" id="nav-right">
                        <a href="https://shop.noskillworld.fr" target="_blank" class="navbar-item-a not-active">Boutique</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main>
        <div class="main-content">
