<?php
/* Smarty version 3.1.28, created on 2016-04-25 21:56:53
  from "/var/www/html/TLI_ACU/templates/pages/accueil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571e7685441a34_09237394',
  'file_dependency' => 
  array (
    'e0a54babb81b5fcd9b17388cd53a33e0fe727f4e' => 
    array (
      0 => '/var/www/html/TLI_ACU/templates/pages/accueil.tpl',
      1 => 1461614112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571e7685441a34_09237394 ($_smarty_tpl) {
?>
<div id="formulaire">
   
   <div id="formulaire-login">
    <h2 id="login-header">Connexion</h2>
    <form id="login-container">
    <ul>
     <li><label for="login-email"> Email :<input type="email" id="login-email" placeholder="Exemple : toto@mail.net"></label></li>
     <li><label for="login-password"> Mot de passe :<input type="password" id="login-password" placeholder="Mot de passe"></label></li>
     <li><input type="submit" id="login-submit" value="Log in"></li>
    </ul>
    </form>
   </div>

 <div id="formulaire-inscription">
  <h2 id="inscription-header">Inscription</h2>
  <form method="post" id="inscription-container" onsubmit="return verifForm(this)>
  <ul>
   <h3 id="champs-requis">Tous les champs sont requis</h3>
   <li><label for="inscription-email"> Email :<input type="email" id="inscription-email" placeholder="Exemple : toto@mail.net" onblur="verifMail(this)" required></label></li>
   <li><label for="inscription-password"> Mot de passe :<input type="password" id="inscription-password" placeholder="Mot de passe" required></label></li>
   <li><label for="inscription-password2"> Confirmation mot de passe :<input type="password" id="inscription-password2 " placeholder="Confirmation Mot de passe" required></label></li>
   <li><label for="inscription-pseudo"> Pseudo :<input type="text" id="inscription-pseudo" placeholder="Pseudo" onblur="verifPseudo(this)" required></label></li>
   <li><input type="submit" id="inscription-submit" value="Inscription"></li>
   </ul>
  </form>

</div>
<?php }
}
