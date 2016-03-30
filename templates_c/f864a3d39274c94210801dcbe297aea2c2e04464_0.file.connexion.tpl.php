<?php
/* Smarty version 3.1.28, created on 2016-03-24 14:59:30
  from "/var/www/html/TLI_ACU/templates/pages/connexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56f3f2c2979af8_74291373',
  'file_dependency' => 
  array (
    'f864a3d39274c94210801dcbe297aea2c2e04464' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/pages/connexion.tpl',
      1 => 1458827960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f3f2c2979af8_74291373 ($_smarty_tpl) {
?>
<div id="formulaire">

   <div id="formulaire-login">
    <h2 id="login-header">Connexion</h2>
    <form id="login-container">
    <ul>
     <li><label for="login-email"> Email :<input type="email" id="login-email" placeholder="Email"></label></li>
     <li><label for="login-password"> Mot de passe :<input type="password" id="login-password" placeholder="Mot de passe"></label></li>
     <li><input type="submit" id="login-submit" value="Log in"></li>
    </ul>
    </form>
   </div>

 <div id="formulaire-inscription">
  <h2 id="inscription-header">Inscription</h2>
  <form id="inscription-container">
  <ul>
   <li><label for="inscription-email"> Email :<input type="email" id="inscription-email" placeholder="Email"></label></li>
   <li><label for="inscription-password"> Mot de passe :<input type="password" id="inscription-password" placeholder="Mot de passe"></label></li>
   <li><label for="inscription-password2"> Confirmation mot de passe :<input type="password" id="inscription-password2" placeholder="Confirmation Mot de passe"></label></li>
   <li><label for="inscription-pseudo"> Pseudo :<input type="text" id="inscription-pseudo" placeholder="Pseudo"></label></li>
   <li><input type="submit" id="inscription-submit" value="Inscription"></li>
   </ul>
  </form>
 </div>

</div>
<?php }
}
