<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Test");

$pager->setHeader();
?>



<?php
$pager->setFooter();
?>