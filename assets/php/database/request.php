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
        $req = "SELECT * FROM actus ORDER BY date DESC;";

        $conn = new Connector();
        $mysqli = $conn->mysqli;

        $result = $mysqli->query($req, MYSQLI_USE_RESULT);

        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $desc = $row['description'];
            $date = $row['date'];

            echo "\n";
            echo "                <div class='actu-item'>\n";
            echo "                    <h2 class='actu-title'>$name</h2>\n";
            echo "                    <p class='actu-desc'>$desc</p>\n";
            echo "                    <span class='actu-date'>$date</span>\n";
            echo "                </div>";
            echo "\n";
        }
    }
}