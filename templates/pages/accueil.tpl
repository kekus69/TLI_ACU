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
  <form id="inscription-container" action="inscription.php" onsubmit="return verifForm(this)>
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
