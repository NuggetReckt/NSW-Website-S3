<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("Lands");

$pager->setHeader();
?>



<?php
$pager->setFooter();
?>