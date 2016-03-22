<?php

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');

require_once(_SMART_ . 'Smarty.class.php');



// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// Connexion Database
try {
$bdd = new PDO("mysql:host=localhost;dbname=acuBD", "root", "tp");
$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Probleme de connexion a la base de donnee ...";
    die();
}

// Initialisation Smarty
$smarty = new Smarty();

//$smarty->debugging = true;

?>
