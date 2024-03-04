<?php

use JetBrains\PhpStorm\NoReturn;

require_once "../assets/php/database/connector.php";

#[AllowDynamicProperties] class PanelRequest
{

    function __construct()
    {
        date_default_timezone_set('Europe/Paris');
    }

    #[NoReturn] function login(string $username, string $password): void
    {
        session_unset();

        $this->username = $username;
        $this->password = $password;

        $conn = new Connector();

        $req = "SELECT password FROM admins WHERE username ='$username';";
        $result = $conn->dbRun($req, [])->fetch(PDO::FETCH_ASSOC);

        if ($result == null) {
            sleep(1);
            header("Location: login.php?error=1");
            session_abort();
        } else if ($password == null || $username == null) {
            //Les champs ne peuvent pas être vides
            header("Location: login.php?error=2");
            session_abort();
        } else {
            if (password_verify($password, $result['password'])) {
                //Le mot de passe est correct
                $_SESSION['admin'] = $username;
                sleep(1);
                header("Location: index.php?logged");
            } else {
                //le mot de passe est incorrect
                sleep(1);
                header("Location: login.php?error=1");
                session_abort();
            }
        }
        unset($username);
        unset($password);
        unset($user_password);
        exit();
    }

    // Fonctions pour créer, modifier, afficher, supprimer les actus

    function create_actu(string $actu_name, string $actu_desc): void
    {
        $actu_publisher = $_SESSION['admin'];

        $actu_date = date('d/m/Y');

        $conn = new Connector();
        $req = "INSERT INTO actus (name, description, date, publisher) VALUES (?, ?, ?, ?);";

        $conn->dbRun($req, [$actu_name, $actu_desc, $actu_date, $actu_publisher]);

        header("Location: create_actu.php?actu_created");
    }

    function get_actus(): void
    {
        $sql = "SELECT id, name, description FROM actus ORDER BY id DESC;";
        $conn = new Connector();
        $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
            $name = $value['name'];
            $id = $value['id'];

            echo "                <div class='actu-item-panel'>\n";
            echo "                    <h2 class='actu-title-panel'>$name</h2>\n";
            echo "                    <div>";
            echo "                        <a href='../index.php#actu-$id' target='_blank' id='actu-goto' class='panel-safe-button'>Go</a>\n";
            echo "                        <a href='edit_actu.php?id=$id' id='actu-edit' class='panel-safe-button'>Edit</a>\n";
            echo "                        <a href='index.php?delete-actu&actu-id=$id' id='actu-delete' class='panel-unsafe-button'>Delete</a>\n";
            echo "                     </div>";
            echo "                </div>";
        }

        if ($result == null) {
            echo "                <div class='actu-item-panel'>\n";
            echo "                    <h2 class='actu-noresult-panel'>Aucun Résultat...</h2>\n";
            echo "                </div>";
        }
    }

    function modify_actu(int $id, string $actu_name, string $actu_desc): void
    {
        $sql = "UPDATE actus SET name = '$actu_name', description = '$actu_desc' WHERE id = '$id';";
        $conn = new Connector();

        $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        header("Location: index.php?actu_modified");
    }

    function delete_actu(int $actu_id): void
    {
        $sql = "DELETE FROM actus WHERE id = ?;";
        $conn = new Connector();

        $conn->dbRun($sql, [$actu_id])->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_actus_by_id(int $id): array
    {
        $sql = "SELECT id, name, description FROM actus WHERE id = ?;";
        $conn = new Connector();

        return $conn->dbRun($sql, [$id])->fetch(PDO::FETCH_ASSOC);
    }

    // Fonctions pour créer, modifier, afficher et supprimer les events

    function create_event(string $event_name, string $datetime, string $desc): void
    {
        $req = "INSERT INTO events (name, datetime, description) VALUES (?, ?, ?);";
        $conn = new Connector();

        $conn->dbRun($req, [$event_name, $datetime, $desc]);
        header("Location: create_event.php?event_created");
    }

    function delete_event(int $event_id): void
    {
        $sql = "DELETE FROM events WHERE id = ?;";
        $conn = new Connector();

        $conn->dbRun($sql, [$event_id])->fetchAll(PDO::FETCH_ASSOC);
    }

    function modify_event(int $id, string $name, string $date): void
    {
        $sql = "UPDATE events SET name = '$name', date = '$date' WHERE id = '$id';";
        $conn = new Connector();

        $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        header("Location: index.php?event_modified");
    }

    function get_events(): void
    {
        $sql = "SELECT id, name, datetime FROM events ORDER BY id DESC;";
        $conn = new Connector();
        $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
            $name = $value['name'];
            $id = $value['id'];

            echo "                <div class='event-item-panel'>\n";
            echo "                    <h2 class='event-title-panel'>$name</h2>\n";
            echo "                    <div>";
            echo "                        <a href='../events.php#event-$id' target='_blank' id='event-goto' class='panel-safe-button'>Go</a>\n";
            echo "                        <a href='edit_event.php?id=$id' id='event-edit' class='panel-safe-button'>Edit</a>\n";
            echo "                        <a href='index.php?delete-event&actu-id=$id' id='event-delete' class='panel-unsafe-button'>Delete</a>\n";
            echo "                     </div>";
            echo "                </div>";
        }

        if ($result == null) {
            echo "                <div class='event-item-panel'>\n";
            echo "                    <h2 class='event-noresult-panel'>Aucun Résultat...</h2>\n";
            echo "                </div>";
        }
    }

    function get_event_by_id(int $id): array
    {
        $sql = "SELECT id, name, datetime FROM events WHERE id = ?;";
        $conn = new Connector();

        return $conn->dbRun($sql, [$id])->fetch(PDO::FETCH_ASSOC);
    }

    function get_reports(bool $getResolved): void
    {
        $sql = "SELECT * FROM core_reports ORDER BY id DESC;";
        $conn = new Connector();
        $result = $conn->dbRunExt($sql, "Core", [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
            $id = $value['id'];
            $creatorName = $value['creatorName'];
            $reportedName = $value['reportedName'];
            $reportedUUID = $value['reportedUuid'];
            $type = $value['typeName'];
            $reason = $value['reason'];
            $isResolved = $value['isResolved'];
            $date = $value['date'];

            if ($getResolved && $isResolved == "1") {
                continue;
            }

            $dateformat = date("d/m/Y \à H\hi", strtotime($date));

            echo "                <div class='report-item-panel'>\n";
            echo "                    <div class='report-item-title'>\n";
            echo "                        <img src='https://mc-heads.net/avatar/$reportedUUID.png' alt='head-$reportedUUID'>\n";
            echo "                        <h2>$reportedName - $type</h2>\n";
            echo "                    </div>";
            echo "                    <div class='report-item-subtitle'>\n";
            echo "                        <span>Report de $creatorName<span><br>\n";
            echo "                        <span>Le $dateformat<span><br>\n";
            echo "                    </div>";
            echo "                    <div class='report-item-content'>\n";
            echo "                        <span>\"$reason\"<span><br>\n";
            echo "                    </div>";
            echo "                    <div class='report-item-actions'>\n";
            if (!$isResolved) {
                echo "                        <a href='index.php?mark-report-as-resolved&actu-id=$id' id='event-edit' class='panel-safe-button'>Resolve</a>\n";
            } else {
                echo "                        <a href='index.php?mark-report-as-unresolved&actu-id=$id' id='event-edit' class='panel-safe-button'>Unresolve</a>\n";
            }
            echo "                        <a href='index.php?delete-report&actu-id=$id' id='report-delete' class='panel-unsafe-button'>Delete</a>\n";
            echo "                    </div>\n";
            echo "                </div>\n";
        }

        if ($result == null) {
            echo "                <div class='report-item-panel'>\n";
            echo "                    <h2 class='report-noresult-panel'>Aucun Résultat...</h2>\n";
            echo "                </div>";
        }
    }

    function isAdmin(string $username): bool
    {
        $sql = "SELECT permission FROM admins WHERE username = ?;";
        $conn = new Connector();

        $result = $conn->dbRun($sql, [$username])->fetch(PDO::FETCH_ASSOC);

        return $result['permission'] == "admin";
    }

    function create_admin($username, $password, $permission): void
    {
        $sql = "INSERT INTO admins (username, password, permission) VALUES (?, ?, ?);";
        $conn = new Connector();

        $conn->dbRun($sql, [$username, $password, $permission]);
        header("Location: create_admin.php?admin_created");
    }
}
