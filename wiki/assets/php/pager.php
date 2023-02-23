<?php
require_once "../assets/php/pager.php";

class WikiPager
{
    public string $title;

    function __construct($title)
    {
        ini_set("default_charset", "UTF-8");

        $this->title = $title;
        $pager = new Pager("");

        if ($pager->isUnderMaintenance) {
            header("Location: ../maintenance.php");
        }
    }

    private function setTitle(): void
    {
        echo "<title> Wiki (", $this->title, ") - NoSkillWorld</title>";
    }

    function setHeader(): void
    {
        require_once "assets/header1.php";
        echo "\n";
        $this->setTitle();
        echo "\n";
        require_once "assets/header2.php";
    }

    function setFooter(): void
    {
        require_once "../assets/footer.php";
    }
}