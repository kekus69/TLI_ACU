<?php
/* Smarty version 3.1.28, created on 2016-03-22 16:43:36
  from "/var/www/html/TLI_ACU/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56f16828b27d11_71021352',
  'file_dependency' => 
  array (
    '296ab092e2109e9af2c8fa028e03df3b0275d195' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/header.tpl',
      1 => 1458657076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f16828b27d11_71021352 ($_smarty_tpl) {
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
  <div id="menuToggle" class="handle">Menu</div>
  <ul id="menu" class="">
    <li><a href="?page=accueil">Accueil</a></li>
    <li><a href="?page=information">Informations</a></li>
    <li><a href="?page=connexion">Connexion/Inscription</a></li>
  </ul>
</nav>
<div id="pushBack"></div>

<!--CONTENT-->

<?php }
}