<?php
require_once "secrets.php";

class Connector
{
    private string $username;
    private string $password;
    private string $database;
    private string $server;
    private int $port;

    function __construct()
    {
        $this->username = DB_USERNAME;
        $this->password = DB_PASSWORD;
        $this->database = DB_DBNAME;
        $this->server = DB_HOST;
        $this->port = 3306;
    }

    function db(string $db): PDO
    {
        $dsn = "mysql:host=" . $this->server . ";port=" . $this->port . ";dbname=" . $db . ";charset=utf8";

        try {
            $db = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "<div class='pop-up-message' id='pop-up-fail'>\n";
            echo "    <span>Database Error: Database Unreachable.</span>\n";
            echo "</div>\n";
        }

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $db;
    }

    function dbRun(string $sql, array $param): PDOStatement
    {
        $statement = $this->db($this->database)->prepare($sql);
        $statement->execute($param);
        return $statement;
    }

    function dbRunExt(string $sql, string $dbname, array $param): PDOStatement
    {
        $statement = $this->db($dbname)->prepare($sql);
        $statement->execute($param);
        return $statement;
    }
}
