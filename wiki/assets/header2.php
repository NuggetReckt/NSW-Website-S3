<?php


function echoIfWiki(): void
{
    if (str_starts_with(getCurrentDir(), "/wiki/")) {
        echo "active";
    } else {
        echo "no-active";
    }
}

function echoIfRules(): void
{
    if (getCurrentDir() == "/wiki/rules.php") {
        echo "active";
    } else {
        echo "no-active";
    }
}

function getCurrentDir(): string
{
    return $_SERVER["PHP_SELF"];
}

?>

</head>
<body id='body-other'>
<button class="responsive-nav-toggle" aria-controls="navbar-list" aria-expanded="false"></button>
<div class="navbar-content">
    <nav>
        <ul class="navbar-list" data-visible="false">
            <li class="navbar-item">
                <a href="<?= "../index.php" ?>" class="navbar-item-a not-active">Accueil</a>
            </li>
            <li class="navbar-item">
                <a href="<?= "index.php" ?>" class="navbar-item-a <?php echoIfWiki() ?>">Wiki</a>
            </li>
            <li class="navbar-item">
                <a href="<?= "../votes.php" ?>" class="navbar-item-a not-active">Votes</a>
            </li>
            <li class="navbar-item">
                <a href="<?= "../events.php" ?>" class="navbar-item-a not-active">Events</a>
            </li>
            <li class="navbar-item">
                <a href="<?= "rules.php" ?>" class="navbar-item-a <?php echoIfRules() ?>">Regles</a>
            </li>
            <li class="navbar-item">
                <a href="<?= "../staff.php" ?>" class="navbar-item-a not-active">Equipe</a>
            </li>
            <hr id="responsive-separator">
            <li class="navbar-item" id="nav-right">
                <a href="https://play.noskillworld.fr/dynmap" target="_blank"
                   class="navbar-item-a not-active">Dynmap</a>
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
