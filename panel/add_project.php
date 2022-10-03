<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Nouveau Projet");

$pager->setHeader();

$request = new PanelRequest();

if (isset($_POST["project-name"]) && isset($_POST["project-link"]) && isset($_POST["project-desc"]) && isset($_POST["project-date"])) {

    $project_name = $_POST["project-name"];
    $project_link = $_POST["project-link"];
    $project_desc = $_POST["project-desc"];
    $project_date = $_POST["project-date"];

    $request->create_project($project_name, $project_link, $project_desc, $project_date);
}

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
}

if (isset($_GET['project_created'])) {
    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Projet créé avec succès.</span>\n";
    echo "            </div>\n";
}

if (isset($_GET['error'])) {
    $err = $_GET['error'];

    if ($err == 2) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Les champs ne peuvent pas être vides !</span>\n";
        echo "            </div>\n";
    }
    if ($err == 3) {
        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>Vous n'êtes pas connecté.</span>\n";
        echo "        </div>\n";
    }
}
?>
                <div class="form" id="project-form">
                    <form action="add_project.php" method="POST">
                        <fieldset>
                            <div class="form-content">
                                <h1>Créer un projet</h1>
                                <label>Nom du projet<br>
                                    <input type="text" name="project-name" class="input" placeholder="Nom du projet" required="">
                                </label>
                                <br>
                                <label>URL vers le projet<br>
                                    <input type="url" name="project-link" class="input" placeholder="Exemple : https://monsite.fr/monprojet.html" required="">
                                </label>
                                <br>
                                <label>Description du projet<br>
                                    <input type="text" name="project-desc" class="input"
                                           placeholder="Description de votre projet" required="">
                                </label>
                                <br>
                                <label>Date<br>
                                    <input type="date" name="project-date" class="input" required="">
                                </label>
                                <br>
                                <input type="submit" value="Créer le projet">
                            </div>
                        </fieldset>
                    </form>
                </div>
<?php
$pager->setFooter();
?>