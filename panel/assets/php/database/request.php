<?php

use JetBrains\PhpStorm\NoReturn;

/**
 * @property string $username
 * @property string $password
 * @property string $password_confirm
 * @property string $name
 * @property string $link
 * @property string $desc
 * @property string $date
 * @property string $actu_name
 * @property string $actu_desc
 * @property string $actu_date
 * @property string $actu_img_url
 */
class PanelRequest
{
    function __construct()
    {
        require_once "../assets/php/database/connector.php";
    }

    #[NoReturn] function login(string $username, string $password): void
    {
        session_unset();

        $this->username = $username;
        $this->password = $password;

        $conn = new Connector();

        $req = "SELECT password FROM admins WHERE username ='$username';";
        $req2 = "SELECT username FROM admins;";

        $result = $conn->dbRun($req, [])->fetch(PDO::FETCH_ASSOC);
        $result2 = $conn->dbRun($req2, [])->fetch(PDO::FETCH_ASSOC);

        $user_username = $result2['username'];

        if ($username != null && $password != null) {

            $user_password = $result['password'];

            if ($password == $user_password) {

                $_SESSION['admin'] = $username;

                //echo "Mot de passe correct.";
                sleep(1);

                header("Location: index.php?logged");
            } else {
                sleep(1);
                //Mot de passe incorrect pour cet utilisateur
                header("Location: login.php?error=1");
                session_abort();
            }
            if ($username != $user_username) {
                header("Location: login.php?error=1");
                session_abort();
                exit();
            }
        } else {
            //Les champs ne peuvent pas être vides !
            header("Location: login.php?error=2");
            session_abort();
            exit();
        }

        unset($username);
        unset($password);
        unset($user_password);
        exit();
    }

    #[NoReturn] function create_actu(string $actu_name, string $actu_desc): void
    {
        $actu_publisher = $_SESSION['admin'];

        date_default_timezone_set('Europe/Paris');
        $actu_date = date('d/m/Y');

        $conn = new Connector();
        $req = "INSERT INTO actus (name, description, date, publisher) VALUES (?, ?, ?, ?);";

        $conn->dbRun($req, [$actu_name, $actu_desc, $actu_date, $actu_publisher]);

        header("Location: create_actu.php?actu_created");
    }

    function get_actus(): void
    {
        $sql = "SELECT * FROM actus ORDER BY id DESC;";
        $conn = new Connector();
        $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
            $id = $value['id'];

            echo "\n";
            echo "                <div class='actu-item-panel'>\n";
            echo "                    <h2 class='actu-title-panel'>{$value['name']}</h2>\n";
            echo "                    <button class='actu-edit-toggle' aria-controls='actu-edit-$id' aria-expanded='false'>Edit</button>";
            echo "                </div>";

            echo "                <div class='actu-edit-item' data-visible='true' id='actu-edit-$id'>\n";
            echo "                    <div class='actu-title-content-edit'>\n";
            echo "                        <h2 class='actu-title-edit'>{$value['name']}</h2>\n";
            echo "                        <span>Le {$value['date']} Par {$value['author']}</span>";
            echo "                    </div>\n";
            echo "                    <p class='actu-desc-panel'>{$value['description']}</p>\n";
            echo "                </div>";
            echo "\n";
        }

        if ($result == null) {
            echo "                <div class='actu-item-panel'>\n";
            echo "                    <div class='actu-noresult-panel'>\n";
            echo "                        <h2>Aucun Résultat...</h2>\n";
            echo "                    </div>\n";
            echo "                </div>";
        }
    }

    function modify_actu_name(int $actu_id, string $actu_name): void
    {
        $sql = "UPDATE actus SET name = '$actu_name' WHERE id = '$actu_id';";
        $conn = new Connector();

        $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        header("Location: index.php?actu_modified");
    }

    function modify_actu_desc(int $actu_id, string $actu_desc): void
    {
        $sql = "UPDATE actus SET description = '$actu_desc' WHERE id = '$actu_id';";
        $conn = new Connector();

        $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        header("Location: index.php?actu_modified");
    }
}
