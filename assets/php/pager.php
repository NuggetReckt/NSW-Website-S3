<?php

class Pager
{
    public string $title;
    public bool $isUnderMaintenance = false;

    function __construct($title)
    {
        ini_set("default_charset", "UTF-8");

        $this->title = $title;

        if ($this->isUnderMaintenance) {
            header("Location: maintenance.php");
        }
    }

    private function setTitle(): void
    {
        echo "<title>", $this->title, " - NoSkillWorld</title>";
    }

    function setHeader(): void
    {
        require_once "assets/header1.php";
        echo "\n        ";
        $this->setTitle();
        echo "\n";
        require_once "assets/header2.php";
    }

    function setFooter(): void
    {
        require_once "assets/footer.php";
    }
}