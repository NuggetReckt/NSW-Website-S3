<?php

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

    function login($username, $password): void
    {
        session_unset();

        $this->username = $username;
        $this->password = $password;

        $conn = new Connector();
        $mysqli = $conn->mysqli;

        $req = "SELECT password FROM admins WHERE username ='$username';";
        $req2 = "SELECT username FROM admins;";

        if ($username != null && $password != null) {

            $result = $mysqli->query($req, MYSQLI_USE_RESULT);

            while ($row = mysqli_fetch_assoc($result)) {
                $user_password = $row['password'];

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
            }

            $result2 = $conn->mysqli->query($req2, MYSQLI_USE_RESULT);

            while ($row = mysqli_fetch_assoc($result2)) {
                $user_username = $row['username'];

                if ($username != $user_username) {
                    header("Location: login.php?error=1");
                    session_abort();
                }
            }
        } else {
            //Les champs ne peuvent pas être vides !
            header("Location: login.php?error=2");
            session_abort();
        }

        unset($username);
        unset($password);
        unset($user_password);
    }

    function create_actu($actu_name, $actu_desc): void
    {
        $this->actu_name = $actu_name;
        $this->actu_desc = $actu_desc;

        $actu_publisher = $_SESSION['admin'];

        date_default_timezone_set('UTC+2');
        $actu_date = date('d/m/Y');

        $conn = new Connector();
        $req = "INSERT INTO actus (name, description, date, publisher) VALUES ('$actu_name', '$actu_desc', '$actu_date', '$actu_publisher');";
        $conn->mysqli->query($req, MYSQLI_USE_RESULT);

        header("Location: add_actu.php?actu_created");
    }
}