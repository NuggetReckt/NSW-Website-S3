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

#[AllowDynamicProperties] class PanelRequest
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
        $result = $conn->dbRun($req, [])->fetch(PDO::FETCH_ASSOC);

        if ($username != null && $password != null) {
            $user_password = $result['password'];

            if (password_verify($password, $user_password)) {
                $_SESSION['admin'] = $username;

                //Mot de passe correct
                sleep(1);
                header("Location: index.php?logged");
            } else {
                //Mot de passe incorrect pour cet utilisateur
                sleep(1);
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
        $sql = "SELECT id, name, description FROM actus ORDER BY id DESC;";
        $conn = new Connector();
        $result = $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $i => $value) {
            echo "\n";
            echo "                <div class='actu-item-panel'>\n";
            echo "                    <h2 class='actu-title-panel'>{$value['name']}</h2>\n";
            echo "                    <div>";
            echo "                        <a href='../index.php#actu-{$value['id']}' target='_blank' id='actu-goto'>Go</a>\n";
            echo "                        <a href='edit_actu.php?id={$value['id']}' id='actu-edit'>Edit</a>\n";
            echo "                        <a href='index.php?delete-actu&actu-id={$value['id']}' id='actu-delete'>Delete</a>\n";
            echo "                     </div>";
            echo "                </div>";
            echo "\n";
        }

        if ($result == null) {
            echo "                <div class='actu-item-panel'>\n";
            echo "                    <h2 class='actu-noresult-panel'>Aucun Résultat...</h2>\n";
            echo "                </div>";
        }
    }


    // Fonctions pour modifier les actus et pour recuperer les données des actus

    function modify_actu(int $actu_id, string $actu_name, string $actu_desc): void
    {
        $sql = "UPDATE actus SET name = '$actu_name', description = '$actu_desc' WHERE id = '$actu_id';";
        $conn = new Connector();

        $conn->dbRun($sql, [])->fetchAll(PDO::FETCH_ASSOC);

        header("Location: index.php?actu_modified");
    }

    function get_actus_id_name_desc(int $id): array
    {
        $sql = "SELECT id, name, description FROM actus WHERE id = ?;";
        $conn = new Connector();
        return $conn->dbRun($sql, [$id])->fetch(PDO::FETCH_ASSOC);
    }

    function delete_actu(int $actu_id): void
    {
        $sql = "DELETE FROM actus WHERE id = ?;";
        $conn = new Connector();

        $conn->dbRun($sql, [$actu_id])->fetchAll(PDO::FETCH_ASSOC);
    }
}
