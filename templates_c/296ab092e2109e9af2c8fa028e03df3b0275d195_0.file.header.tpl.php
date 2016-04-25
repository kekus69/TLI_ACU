<?php
/* Smarty version 3.1.28, created on 2016-04-24 22:21:43
  from "/var/www/html/TLI_ACU/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571d2ad72e5919_51855102',
  'file_dependency' => 
  array (
    '296ab092e2109e9af2c8fa028e03df3b0275d195' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/header.tpl',
      1 => 1461528779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571d2ad72e5919_51855102 ($_smarty_tpl) {
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
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/nav.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/filter.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/surligne.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/verifPseudo.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/verifMail.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/verifPass.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src='javascript/verifForm.js'><?php echo '</script'; ?>
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
    <li><a href="?page=accueil"tabindex="1" accesskey="a">Accueil</a></li>
    <li><a href="?page=information"tabindex="2" accesskey="i">Informations</a></li>
    <li><a href="?page=recherche"tabindex="3" accesskey="c">Recherche</a></li>
  </ul>
</nav>
<div class="bodycenter">
<!--CONTENT-->

<?php }
}
