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
        $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
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

        if ($result == null) {
            echo "                    <div class='actu-item'>\n";
            echo "                        <div class='actu-noresult'>\n";
            echo "                            <h2>Aucun Résultat...</h2>\n";
            echo "                            <span>Pour le moment</span>";
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
            $datetime = $value['datetime'];

            echo "<div class='event-item' id='event-$id'>";
            echo "    <div class='event-title-content'>";
            echo "        <h1 class='event-title'>$name</h1>";
            echo "        <h2 class='event-subtitle'>Le $datetime</h2>";
            echo "    </div>";
            echo "    <a class='event-link' target='_blank' href='https://discord.gg/qZFeAwDTut'>Rejoindre</a>";
            echo "</div>";
        }

        if ($result == null) {
            echo "                    <div class='event-item event-item-noresult'>\n";
            echo "                        <h1>Aucun Event à venir...</h1>\n";
            echo "                        <span>(pour le moment)</span>";
            echo "                    </div>\n";
        }
    }
}