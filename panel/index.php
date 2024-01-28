<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "../assets/php/messages.php";
$pager = new PanelPager("Menu");

$pager->setHeader();

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

$err = filter_input(INPUT_GET, 'error', FILTER_VALIDATE_INT);
$actu_id = filter_input(INPUT_GET, 'actu-id', FILTER_VALIDATE_INT);

if (isset($_GET['logged'])) {
    $username = $_SESSION['admin'];
    $msg->printWelcome($username);
}

if (isset($err)) {
    $msg->printError($err);
}

if (isset($_GET['actu_modified'])) {
    $msg->printSuccess("actu_modified");
} else if (isset($_GET['actu_deleted'])) {
    $msg->printSuccess("actu_deleted");
} else if (isset($_GET['event_deleted'])) {
    $msg->printSuccess("event_deleted");
} else if (isset($_GET['event_modified'])) {
    $msg->printSuccess("event_modified");
}

if (isset($_GET['delete-actu'])) {
    if ($actu_id >= 0) {
        if ($request->isAdmin($_SESSION['admin'])) {
            $request->delete_actu($actu_id);
            header("Location: index.php?actu_deleted");
        } else {
            header("Location: index.php?error=5");
        }
    } else {
        header("Location: index.php?error=4");
    }
} else if (isset($_GET['delete-event'])) {
    if ($actu_id >= 0) {
        if ($request->isAdmin($_SESSION['admin'])) {
            $request->delete_event($actu_id);
            header("Location: index.php?event_deleted");
        } else {
            header("Location: index.php?error=5");
        }
    } else {
        header("Location: index.php?error=4");
    }
}
?>
<div class="top-content top-content-menu" id="top-content-menu">
    <div class="top-title-menu">
        <h1 id="menu-title">Panel</h1>
    </div>
</div>
<div class="menu-content">
    <div class="menu-left">
        <div class="manage-actus-content">
            <div class="manage-actus-title">
                <h1>Actus</h1>
            </div>
            <div class="manage-actus">
                <?php $request->get_actus() ?>
            </div>
        </div>
        <div class="manage-event-content">
            <div class="manage-event-title">
                <h1>Events</h1>
            </div>
            <div class="manage-events">
                <?php $request->get_events() ?>
            </div>
        </div>
    </div>
    <div class="menu-right">
        <div class="manage-reports-content">
            <div class="manage-reports-title">
                <h1>Reports</h1>
            </div>
            <div class="manage-reports">
                <?php $request->get_reports() ?>
            </div>
        </div>
    </div>
</div>
<?php
$pager->setFooter();
?>