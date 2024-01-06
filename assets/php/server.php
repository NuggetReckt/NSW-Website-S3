<?php

require __DIR__ . '/../../vendor/autoload.php';

use function Amp\async;

class Server
{
    private int $players_count;
    private int $slots_count;
    private int $is_online;

    public function __construct()
    {
        $future = async(function () {
            $this->players_count = file_get_contents('https://www.serveurs-minecraft.org/api/players_count.php?id=60934');
            $this->slots_count = file_get_contents('https://www.serveurs-minecraft.org/api/slots_count.php?id=60934');
            $this->is_online = file_get_contents('https://www.serveurs-minecraft.org/api/is_online.php?id=60934');
        });
        $future->await();
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
        if ($this->slots_count == 1) {
            return "Serveur en maintenance !";
        }
        return match ($this->is_online) {
            1 => "Serveur en ligne :)",
            0 => "Serveur hors ligne :/",
            -1 => "Erreur 💩",
            default => "Erreur inconnue",
        };
    }
}
