<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Jobs");

$pager->setHeader();
?>



<?php
$pager->setFooter();
?>