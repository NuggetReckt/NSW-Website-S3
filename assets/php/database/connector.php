<?php
/**
 * @property string $password
 * @property string $username
 * @property string $database
 * @property string $server
 * @property int $port
 */

class Connector
{
    public mysqli $mysqli;

    function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $this->username = "root";
        $this->password = "root";
        $this->database = "data";
        $this->server = "localhost";
        $this->port = 3306;

        try {
            $this->mysqli = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
        } catch (mysqli_sql_exception) {
            echo "<div class='pop-up-message' id='pop-up-fail'>\n";
            echo "    <span>Database Error: Database Unreachable.</span>\n";
            echo "</div>\n";
        }
    }
}