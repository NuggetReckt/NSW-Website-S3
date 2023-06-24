<?php

class Messages
{
    function printError(int $id): void
    {
        $msg = "";

        switch ($id) {
            case 1:
                $msg = "Mot de passe ou utilisateur incorrect.";
                break;
            case 2:
                $msg = "Les champs ne peuvent pas être vides !";
                break;
            case 3:
                $msg = "Vous n'êtes pas connecté.";
                break;
            case 4:
                $msg = "Impossible d'effectuer cette action.";
                break;
            case 5:
                $msg = "Vous n'avez pas la permission !";
                break;
        }

        echo "            <div class='pop-up-message' id='pop-up-fail'>\n";
        echo "                <span>$msg</span>\n";
        echo "            </div>\n";
    }

    function printSuccess(string $name): void
    {
        $msg = "";

        switch ($name) {
            case "actu_created":
                $msg = "Actu créée avec succès.";
                break;
            case "actu_modified":
                $msg = "Actu modifiée avec succès.";
                break;
            case "event_modified":
                $msg = "Event modifié avec succès.";
                break;
            case "event_created":
                $msg = "Event créé avec succès.";
                break;
            case "actu_deleted":
                $msg = "Actu supprimée avec succès.";
                break;
            case "event_deleted":
                $msg = "Event supprimée avec succès.";
                break;
            case "admin_created":
                $msg = "Admin créé avec succès.";
                break;
            case "disconnected":
                $msg = "Vous avez été déconnecté avec succès.";
                break;
        }

        echo "            <div class='pop-up-message' id='pop-up-success'>\n";
        echo "                <span>$msg</span>\n";
        echo "            </div>\n";
    }

    function printWelcome(string $name): void
    {
        echo "            <div class='pop-up-message' id='pop-up-success'>\n";
        echo "                <span>Connecté avec succès. Bienvenue, $name</span>\n";
        echo "            </div>\n";
    }
}