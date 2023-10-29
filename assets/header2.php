<?php

function echoIfActive($page): void
{
    if (getCurrentPage() == $page) {
        echo "active";
    } else {
        echo "not-active";
    }
}

function echoBody(): void
{
    if (getCurrentPage() == "index.php") {
        echo "<body>";
    } else {
        echo "<body id='body-other'>";
    }
}

function getCurrentPage(): string
{
    return basename($_SERVER["PHP_SELF"]);
}

?>
    </head>
        <?php echoBody() ?>
        <button class="responsive-nav-toggle" aria-controls="navbar-list" aria-expanded="false"></button>
        <div class="navbar-content">
            <nav>
                <ul class="navbar-list" data-visible="false">
                    <li class="navbar-item">
                        <a href="<?="index.php"?>" class="navbar-item-a <?php echoIfActive("index.php")?>">Accueil</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="/wiki"?>" class="navbar-item-a <?php echoIfActive("wiki")?>">Wiki</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="votes.php"?>" class="navbar-item-a <?php echoIfActive("votes.php")?>">Votes</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="events.php"?>" class="navbar-item-a <?php echoIfActive("events.php")?>">Events</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="wiki/rules.php"?>" class="navbar-item-a <?php echoIfActive("cgu-cgv.php")?>">Regles</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?="staff.php"?>" class="navbar-item-a <?php echoIfActive("staff.php")?>">Equipe</a>
                    </li>
                    <hr id="responsive-separator">
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