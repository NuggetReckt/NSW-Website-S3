<?php
require_once "config.php";

class Pager
{
    private string $title;

    public function __construct($title)
    {
        ini_set("default_charset", "UTF-8");

        $this->title = $title;
        $config = new Config();

        $extension = pathinfo(basename($_SERVER["PHP_SELF"]), PATHINFO_EXTENSION);

        if ($config->isUnderMaintenance && $extension == "php") {
            header("Location: $config->maintenanceURL");
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
