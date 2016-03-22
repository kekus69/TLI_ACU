<?php
/* Smarty version 3.1.28, created on 2016-03-21 00:23:43
  from "/var/www/html/projet/templates/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56ef30ff5b2fa3_77306962',
  'file_dependency' => 
  array (
    'f789b0f5399e86e3d5f0f5dc6830258297c8876e' => 
    array (
      0 => '/var/www/html/projet/templates/layout.tpl',
      1 => 1458515893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ef30ff5b2fa3_77306962 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_174351938456ef30ff586742_50287621',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
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
    <li><a href="#">Accueil</a></li>
    <li><a href="#">Informations</a></li>
    <li><a href="#">Connexion/Inscription</a></li>
  </ul>
  <div id="menuToggle" class="handle">Menu</div>
</nav>
<div id="pushBack"></div>

<!--CONTENT-->

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_16780873356ef30ff59bd44_42973789',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<!-- END CONTENT -->               

<!--FOOTER-->
<div id="footer">
</div>
<!--END FOOTER-->

</body>
</html>
<?php }
/* {block 'title'}  file:layout.tpl */
function block_174351938456ef30ff586742_50287621($_smarty_tpl, $_blockParentStack) {
?>
Association des acupuncteurs<?php
}
/* {/block 'title'} */
/* {block 'content'}  file:layout.tpl */
function block_16780873356ef30ff59bd44_42973789($_smarty_tpl, $_blockParentStack) {
?>
page de test<?php
}
/* {/block 'content'} */
}
