<?php

class Pager
{
    private string $title;
    public bool $isUnderMaintenance = false;

    public function __construct($title)
    {
        ini_set("default_charset", "UTF-8");

        $this->title = $title;

        $extension = pathinfo(basename($_SERVER["PHP_SELF"]), PATHINFO_EXTENSION);

        if ($this->isUnderMaintenance && $extension == "php") {
            header("Location: maintenance.php");
        }
    }

    private function setTitle(): void
    {
        echo "<title>", $this->title, " - NoSkillWorld</title>";
    }

    public function setHeader(): void
    {
        require_once "assets/header1.php";
        echo "\n";
        $this->setTitle();
        echo "\n";
        require_once "assets/header2.php";
    }

    public function setFooter(): void
    {
        require_once "assets/footer.php";
    }
}