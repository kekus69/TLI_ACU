<?php
/* Smarty version 3.1.28, created on 2016-03-21 22:55:05
  from "/var/www/html/projet/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56f06db971d372_64791805',
  'file_dependency' => 
  array (
    '3284b6a67c0aa5e946e5ecc53c9a7d9cc117fed8' => 
    array (
      0 => '/var/www/html/projet/templates/header.tpl',
      1 => 1458597300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f06db971d372_64791805 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'Association des acupuncteurs' : $tmp);?>
</title>
<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen"/>
<!--FIN DU CSS-->

<!--JAVASCRIPT-->
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/nav.js'><?php echo '</script'; ?>
>

<!--FIN DU JAVASCRIPT-->


</head>

<body>

<header id="head">
  <img src="img/logo.png" alt="logo_site" id="logo">
  <h1 id="logotext" >Association Des Acupuncteurs</h1>
</header>
<nav id="navBar">
  <ul id="menu" class="">
    <li><a href="?page=accueil">Accueil</a></li>
    <li><a href="?page=information">Informations</a></li>
    <li><a href="?page=connexion">Connexion/Inscription</a></li>
  </ul>
  <div id="menuToggle" class="handle">Menu</div>
</nav>
<div id="pushBack"></div>

<!--CONTENT-->

<?php }
}
