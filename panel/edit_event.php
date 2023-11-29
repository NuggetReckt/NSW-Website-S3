<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "../assets/php/messages.php";
$pager = new PanelPager("Modification Actu");

$pager->setHeader();

// Variable POST/GET
$event_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$event_name = filter_input(INPUT_POST, 'event-name', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
$event_date = filter_input(INPUT_POST, 'event-date', FILTER_SANITIZE_SPECIAL_CHARS) ?? null;
$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);

$request = new PanelRequest();
$msg = new Messages();

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == null) {
        header("Location: login.php?error=3");
    }
} else {
    $_SESSION['admin'] = null;
    header("Location: login.php?error=3");
}

if (isset($event_name) || isset($event_date)) {
    $request->modify_event($event_id, $event_name, $event_date);
}

$eventData = $request->get_event_by_id($event_id);

$event_name = filter_input(INPUT_POST, 'event-name', FILTER_SANITIZE_SPECIAL_CHARS) ?? $eventData['name'];
$event_date = filter_input(INPUT_POST, 'event-date', FILTER_SANITIZE_SPECIAL_CHARS) ?? $eventData['datetime'];

if (isset($_GET['actu_modified'])) {
    $msg->printSuccess("event_modified");
}

if (isset($err)) {
    $msg->printError($err);
}
?>
    <div class="form" id="actu-form">
        <form action="edit_event.php" method="POST">
            <fieldset>
                <div class="form-content">
                    <h1>Modifier un évent</h1>
                    <label>Titre de l'Event<br>
                        <input type="text" name="event-name" class="input" placeholder="Titre de l'évent"
                               required="" value="<?= $event_name ?>">
                    </label>
                    <br>
                    <label>Date/Heure<br>
                        <input type="date" name="event-date" min="2023-01-01" required=""><br>
                        <input type="time" name="event-hour" required="">
                    </label>
                    <br>
                    <input type="submit" value="Modifier l'Event">
                </div>
            </fieldset>
        </form>
    </div>
<?php
$pager->setFooter();
?>