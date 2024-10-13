<?php

class Config
{
    public bool $isUnderMaintenance;
    public string $maintenanceURL;
    public string $keywords;
    public string $description;

    public function __construct()
    {
        //Maintenance settings
        $this->isUnderMaintenance = false;
        $this->maintenanceURL = "https://play.noskillworld.fr/maintenance";

        //Site metadata settings
        $this->keywords = "serv, mc, minecraft, Minecraft, aventure, java, 1.21, 1.21.1, 1.21.2, Fr, fr, FR, français, french, génération custom, serveur, premium, survie, créatif, créa, NoSkillWorld, nsw, Semi-RP, events, hardcore";
        $this->description = "Site internet du serveur Minecraft NoSkillWorld. Rejoins le serveur avec tes amis ou en solo pour vivre de formidables aventures !";
    }
}