<?php

enum MessagesType: string
{
    case ACTU_CREATED = "Actu créée avec succès.";
    case ACTU_DELETED = "Actu supprimée avec succès.";
    case ACTU_MODIFIED = "Actu modifiée avec succès.";
    case EVENT_CREATED = "Event créé avec succès.";
    case EVENT_DELETED = "Event supprimé avec succès.";
    case EVENT_MODIFIED = "Event modifié avec succès.";
    case ADMIN_CREATED = "Compte admin créé avec succès.";
    case DISCONNECTED = "Vous avez été déconnecté avec succès.";
}

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

    function printSuccess(MessagesType $type): void
    {
        echo "            <div class='pop-up-message' id='pop-up-success'>\n";
        echo "                <span>$type->value</span>\n";
        echo "            </div>\n";
    }

    function printWelcome(string $name): void
    {
        echo "            <div class='pop-up-message' id='pop-up-success'>\n";
        echo "                <span>Connecté avec succès. Bienvenue, $name</span>\n";
        echo "            </div>\n";
    }
}