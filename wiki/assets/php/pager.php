<?php
require_once "../assets/php/config.php";

class WikiPager
{
    private string $title;

    public function __construct($title, $isUnderConstruction)
    {
        ini_set("default_charset", "UTF-8");

        $this->title = $title;
        $config = new Config();

        $extension = pathinfo(basename($_SERVER["PHP_SELF"]), PATHINFO_EXTENSION);

        if ($config->isUnderMaintenance && $extension == "php") {
            header("Location: $config->maintenanceURL");
        } elseif ($isUnderConstruction) {
            header("Location: under-construction");
        }
    }

    private function setTitle(): void
    {
        echo "<title> Wiki (", $this->title, ") - NoSkillWorld</title>";
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
        require_once "../assets/footer.php";
    }
}