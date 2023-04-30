<?php

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
            $id = $value['id'];
            $name = $value['name'];
            $date = $value['date'];
            $publisher = $value['publisher'];
            $desc = $value['description'];

            echo "                    <div class='actu-item' id='actu-$id'>\n";
            echo "                        <div class='actu-title-content'>\n";
            echo "                            <h2 class='actu-title'>$name</h2>\n";
            echo "                            <span class='actu-subtitle'>Le $date Par $publisher</span>\n";
            echo "                        </div>\n";
            echo "                        <p class='actu-desc'>$desc</p>\n";
            echo "                    </div>\n";
        }

        if (!$nbActus) {
            echo "                    <div class='actu-item'>\n";
            echo "                        <div class='actu-noresult'>\n";
            echo "                         <h2>Aucun Résultat...</h2>\n";
            echo "                        </div>\n";
            echo "                    </div>\n";
        }
    }

    function get_events(): void
    {
        $sql = "SELECT * FROM events ORDER BY id DESC;";
        $conn = new Connector();
        $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
            $id = $value['id'];
            $name = $value['name'];
            $date = $value['date'];
            $hour = $value['hour'];

            echo "<div class='event-item' id='event-$id'>";
            echo "    <h1 class='event-title'>$name</h1>";
            echo "    <h2 class='actu-subtitle'>Le $date à $hour</h2>";
            echo "</div>";
        }
    }

    function getNumberOfActus(): array|bool
    {
        $sql = "SELECT COUNT(id) AS 'nbActu' FROM actus GROUP BY id";
        $conn = new Connector();
        return $conn->dbRun($sql, [])->fetch(PDO::FETCH_ASSOC);
    }
}