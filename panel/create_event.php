<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new PanelPager("Nouvel Event");

$pager->setHeader();

// Variable POST/GET
$event_name = filter_input(INPUT_POST, 'event-name', FILTER_SANITIZE_SPECIAL_CHARS);
$event_date = filter_input(INPUT_POST, 'event-date', FILTER_SANITIZE_SPECIAL_CHARS);
$event_hour = filter_input(INPUT_POST, 'event-hour', FILTER_SANITIZE_SPECIAL_CHARS);
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();

if (isset($event_name) && isset($event_date) && isset($event_hour)) {
    $request->create_event($event_name, $event_date, $event_hour);
}

if ($_SESSION['admin'] == null) {
    header("Location: login.php?error=3");
    exit();
}

if (isset($_GET['event_created'])) {
    echo "            <div class='pop-up-message' id='pop-up-success'>\n";
    echo "                <span>Event créé avec succès.</span>\n";
    echo "            </div>\n";
}

if (isset($err)) {

    switch ($err) {
        case 2:
            echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
            echo "                <span>Les champs ne peuvent pas être vides !</span>\n";
            echo "            </div>\n";
            break;
        case 3:
            echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
            echo "                <span>Vous n'êtes pas connecté.</span>\n";
            echo "            </div>\n";
            break;
    }
}
?>
    <div class="form" id="actu-form">
        <form action="create_event.php" method="POST">
            <fieldset>
                <div class="form-content">
                    <h1>Créer un évent</h1>
                    <label>Titre de l'évent<br>
                        <input type="text" name="event-name" class="input" placeholder="Titre de l'évent"
                               required="">
                    </label>
                    <br>
                    <label>Date/Heure<br>
                        <input type="date" name="event-date" min="2023-01-01" required=""><br>
                        <input type="time" name="event-hour" required="">
                    </label>
                    <br>
                    <input type="submit" value="Créer l'évent">
                </div>
            </fieldset>
        </form>
    </div>
<?php
$pager->setFooter();
?>