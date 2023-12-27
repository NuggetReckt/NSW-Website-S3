<?php

class PanelPager
{
    private string $title;

    public function __construct($title)
    {
        $this->title = $title;

        ini_set("default_charset", "UTF-8");
    }

    private function setTitle(): void
    {
        echo "<title>", $this->title, " - NoSkillWorld (Admin)</title>";
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