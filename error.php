<?php
require_once "assets/php/pager.php";
$pager = new Pager("Erreur");

$pager->setHeader();

$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);
?>

        <div class="top-content top-content-others" id="top-content-error">
            <div class="top-title">
                <h1 id="error-title">Error: <?php echo get_error($err) ?></h1>
            </div>
            <div class="error-subtitle">
                <a href="index.php" id="back-link">Revenir à l'accueil</a><span id="error-separator">ou</span><a href="https://discord.gg/cE4eHEZWrD" target="_blank" id="discord-link">Soumettre le bug</a>
            </div>
        </div>

<?php
$pager->setFooter();

function get_error($err): string
{
    if (isset($err)) {
        switch ($err) {
            case 403:
                return "$err No Permission.";
            case 404:
                return "$err Not Found.";
            case 500:
                return "$err Internal Server Error.";
            case 502:
                return "$err Bad Gateway.";
            case 503:
                return "$err Service Unavailable.";
            case 504:
                return "$err Gateway Timeout.";
            default:
                break;
        }
    }
    return "Unknown error.";
}
?>