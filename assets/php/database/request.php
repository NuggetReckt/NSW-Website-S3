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

    function get_projects(): void
    {
        $req = "SELECT * FROM projects ORDER BY date DESC;";

        $conn = new Connector();
        $mysqli = $conn->mysqli;

        $result = $mysqli->query($req, MYSQLI_USE_RESULT);

        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $link = $row['link'];
            $desc = $row['description'];
            $date = $row['date'];

            echo "\n";
            echo "                <div class='project-content'>\n";
            echo "                    <a href='$link' target='_blank'>\n";
            echo "                        <h2 class='project-title'>$name</h2>\n";
            echo "                    </a>\n";
            //echo "                    <img class='project-img' src='/assets/images/test.jpg' alt='project-img'>\n";
            echo "                    <p class='project-desc'>$desc</p>\n";
            echo "                    <span class='project-date'>$date</span>\n";
            echo "                    <hr>\n";
            echo "                </div>";
            echo "\n";
        }
    }
}