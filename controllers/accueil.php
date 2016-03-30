<?php

$smarty->assign('title', 'home');

$req = $bdd->prepare('SELECT name, patho.mer, patho.type, patho.desc FROM `keywords` join keySympt on keywords.idK=keySympt.idK join symptome on keySympt.idS=symptome.idS join symptPatho on symptome.idS=symptPatho.idS join patho on symptPatho.idP=patho.idP WHERE name=?');

$req->execute(array($_POST['keyword']));

echo '<ul>';
while ($donnees = $req->fetch())
{
echo '<li>Patho :' . $donnees['desc'] . '</li>';
}
echo '</ul>';
$req->closeCursor(); 
?>
