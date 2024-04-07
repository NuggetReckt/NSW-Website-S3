<?php
include_once "php/config.php";

$config = new Config();
?>

<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="NuggetReckt">
        <meta name="keywords" content="<?= $config->keywords ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= "assets/images/apple-touch-icon.png" ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= "assets/images/favicon-32x32.png" ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= "assets/images/favicon-16x16.png" ?>">
        <link rel="manifest" href="<?= "assets/images/site.webmanifest" ?>">
        <link rel="mask-icon" href="<?= "assets/images/safari-pinned-tab.svg" ?>" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="description" content="<?= $config->description ?>">

        <!-- Facebook, Discord and LinkedIn Meta Tags -->
        <meta name="theme-color" content="#2C70BA">
        <meta property="og:url" content="https://play.noskillworld.fr">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="play.noskillworld.fr">
        <meta property="og:title" content="Site - NoSkillWorld">
        <meta property="og:description" content="<?= $config->description ?>">
        <meta property="og:image" content="https://play.noskillworld.fr/assets/images/embed-icon.png">
        <meta property="og:image:alt" content="logo_nsw">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="50">
        <meta property="og:image:height" content="50">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="play.noskillworld.fr">
        <meta property="twitter:url" content="https://play.noskillworld.fr">
        <meta name="twitter:title" content="Site - NoSkillWorld">
        <meta name="twitter:description" content="<?= $config->description ?>">
        <meta name="twitter:image" content="https://play.noskillworld.fr/assets/images/background.png">

        <link rel="stylesheet" href="<?= "assets/css/main.css" ?>">
        <link rel="stylesheet" href="<?= "assets/css/responsive.css" ?>">