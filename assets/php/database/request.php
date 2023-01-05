<?php

/**
 * @property string $username
 * @property string $password
 */

class Request
{
    function __construct()
    {
        require_once "connector.php";
    }

    function get_actus(): void
    {
        $sql = "SELECT * FROM actus ORDER BY id DESC;";

        $conn = new Connector();

        $actus = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        $nbActus = $this->getNumberOfActus();

        foreach ($actus as $i => $value) {
            echo "\n";
            echo "                <div class='actu-item'>\n";
            echo "                    <div class='actu-title-content'>\n";
            echo "                        <h2 class='actu-title'>{$value['name']}</h2>\n";
            echo "                        <span class='actu-subtitle'>Le {$value['date']} Par {$value['publisher']}</span>\n";
            echo "                    </div>\n";
            echo "                    <p class='actu-desc'>{$value['description']}</p>\n";
            echo "                </div>";
            echo "\n";
        }

        if (!$nbActus) {
            echo "                <div class='actu-item'>\n";
            echo "                    <div class='actu-noresult'>\n";
            echo "                        <h2>Aucun Résultat...</h2>\n";
            echo "                    </div>\n";
            echo "                </div>";
        }
    }

    function getNumberOfActus(): array|bool
    {
        $sql = "SELECT COUNT(id) AS 'nbActu' FROM actus GROUP BY id";
        $conn = new Connector();
        $nbActus = $conn->dbRun($sql, [])->fetch(PDO::FETCH_ASSOC);

        return $nbActus;
    }
}