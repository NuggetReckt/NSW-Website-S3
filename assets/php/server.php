<?php

class Server
{
    private int $players_count;
    private int $slots_count;
    private int $is_online;

    public function __construct()
    {
        $this->players_count = file_get_contents('https://www.serveurs-minecraft.org/api/players_count.php?id=60934');
        $this->slots_count = file_get_contents('https://www.serveurs-minecraft.org/api/slots_count.php?id=60934');
        $this->is_online = file_get_contents('https://www.serveurs-minecraft.org/api/is_online.php?id=60934');
    }

    public function getPlayerCount(): string
    {
        if ($this->players_count >= 0 && $this->slots_count >= 0) {
            return "$this->players_count joueurs connectés/$this->slots_count";
        } else {
            return "?/?";
        }
    }

    public function getServerStatus(): string
    {
        switch ($this->is_online) {
            case 1:
                return "Serveur en ligne :)";
            case 0:
                return "Serveur hors ligne :/";
            case -1:
                return "Erreur 💩";
            default:
                return "Erreur inconnue";
        }
    }
}
