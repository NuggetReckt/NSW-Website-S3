<?php
require_once "assets/php/pager.php";
$pager = new Pager("Error");

$pager->setHeader();

$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);
?>

        <div class="top-content top-content-others" id="top-content-error">
            <div class="top-title">
                <h1 id="error-title">Error:

                    <?php
                    if (isset($err)) {
                        switch ($err) {
                            case 403:
                                echo $err, " No Permission.";
                                break;
                            case 404:
                                echo $err, " Not Found.";
                                break;
                            case 500:
                                echo $err, " Internal Server Error.";
                                break;
                            case 502:
                                echo $err, " Bad Gateway.";
                                break;
                            case 503:
                                echo $err, " Service Unavailable.";
                                break;
                            case 504:
                                echo $err, " Gateway Timeout.";
                                break;
                            default:
                                echo "Unknown error.";
                        }
                    }
                    ?>
                </h1>
            </div>
            <div class="error-subtitle">
                <a href="index.php" id="back-link">Revenir à l'accueil</a><span id="error-separator">ou</span><a href="https://discord.gg/cE4eHEZWrD" target="_blank" id="discord-link">Soumettre le bug</a>
            </div>
        </div>

<?php
$pager->setFooter();
?>