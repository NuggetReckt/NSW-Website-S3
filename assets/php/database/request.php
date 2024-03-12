<?php

require __DIR__ . '/../../../vendor/autoload.php';

use function Amp\async;

class Request
{
    function __construct()
    {
        require_once "connector.php";
    }

    function get_actus(): void
    {
        $future = async(function () {
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
        });
        $future->await();
    }

    function get_events(): void
    {
        $future = async(function () {
            $sql = "SELECT * FROM events WHERE datetime > NOW() ORDER BY datetime DESC;";
            $conn = new Connector();
            $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $i => $value) {
                $id = $value['id'];
                $name = $value['name'];
                $datetime = $value['datetime'];
                $desc = $value['description'];

                $dateformat = date("d/m/Y \à H\hi", strtotime($datetime));

                echo "<div class='event-item' id='event-$id'>\n";
                echo "    <div class='event-title-content'>\n";
                echo "        <h1 class='event-title'>$name</h1>\n";
                echo "        <h2 class='event-subtitle'>Le $dateformat</h2>\n";
                echo "        <hr class='event-separator'>\n";
                echo "    </div>\n";
                echo "    <div class='event-content'>\n";
                echo "        <p class='event-desc'>$desc</p>\n";
                echo "    </div>\n";
                echo "    <a class='event-link' target='_blank' href='https://discord.gg/qZFeAwDTut'>Rejoindre</a>\n";
                echo "</div>\n";
            }

            if ($result == null) {
                echo "                    <div class='event-item event-item-noresult'>\n";
                echo "                        <h1>Aucun Event à venir...</h1>\n";
                echo "                        <span>(pour le moment)</span>";
                echo "                    </div>\n";
            }
        });
        $future->await();
    }
}