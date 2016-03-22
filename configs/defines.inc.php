<?php

// Si on a pas ces infos, rien ne peut fonctionner : die
if (!isset($_SERVER['DOCUMENT_ROOT']))
    die();

// Define de la racine du site
define('_PATH_', $_SERVER['DOCUMENT_ROOT'].'/TLI_ACU/');

// Define du dossier Coeur
define('_CORE_', _PATH_ . 'core/');

// Define du dossier des Controleurs
define('_CTRL_', _PATH_ . 'controllers/');

// Define du dossier des Configs
define('_CONFIG_', _PATH_ . 'configs/');

// Define du dossier des TPL
define('_TPL_', _PATH_ . 'templates/');

// Define du dossier des logs
define('_LOGS_', _PATH_ . 'logs/');

// Define du dossier de Smarty
define('_SMART_', _PATH_ . 'smarty/libs/');

?>

