<?php

$smarty->assign('title', 'ADA - Accueil');

$req = $bdd->prepare('SELECT name, patho.mer, patho.type, patho.desc FROM `keywords` join keySympt on keywords.idK=keySympt.idK join symptome on keySympt.idS=symptome.idS join symptPatho on symptome.idS=symptPatho.idS join patho on symptPatho.idP=patho.idP WHERE name=?');

$req->execute(array($_POST['keyword']));

echo '<ul>';
while ($donnees = $req->fetch())
{
echo '<li>Patho :' . $donnees['desc'] . '</li>';
}
echo '</ul>';
$req->closeCursor(); 

if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {


// Je mets aussi certaines sécurités ici si le javascript est désactivé..

$passe = mysql_real_escape_string(htmlspecialchars($_POST['password-inscription']));

$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['password-inscription2']));

if($passe == $passe2)

{

$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['inscription-pseudo']));

$email = mysql_real_escape_string(htmlspecialchars($_POST['inscription-email']));
echo "ok";

// Je vais crypter le mot de passe.

$passe = sha1($passe);


mysql_query("INSERT INTO user VALUES('', '$pseudo', '$passe', '$email')");
echo "ok2";

}

 

else

{

echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';

}

}

?>
