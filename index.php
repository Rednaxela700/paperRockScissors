<?php

//view notices
ini_set("display_errors", "on");
error_reporting(E_ALL);

$sitesPath = 'sites/';
$mainLink = 'main.php';
$scoresLink = 'highscores.php';

if (!empty($_GET['action'])) {
    if ($_GET ['action'] === 'highscores') {
        $myFile = $sitesPath . $scoresLink;
    } elseif ($_GET['action'] === 'main') {
        $myFile = $sitesPath . $mainLink;
    } else {
        $myFile = $sitesPath . $mainLink;
    }
}
require $sitesPath . $mainLink;