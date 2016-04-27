<?php

$smarty->assign('title', 'ADA - Accueil');

if (isset($erreur)) echo '<br />',$erreur;

$req = $bdd->prepare('SELECT name, patho.mer, patho.type, patho.desc FROM `keywords` join keySympt on keywords.idK=keySympt.idK join symptome on keySympt.idS=symptome.idS join symptPatho on symptome.idS=symptPatho.idS join patho on symptPatho.idP=patho.idP WHERE name=?');

$req->execute(array($_POST['keyword']));

echo '<ul>';
while ($donnees = $req->fetch())
{
echo '<li>Patho :' . $donnees['desc'] . '</li>';
}
echo '</ul>';
$req->closeCursor(); 


if (smarty.post.Inscription) {
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['inscription-email']) && !empty($_POST['inscription-email'])) && (isset($_POST['inscription-password']) && !empty($_POST['inscription-password'])) && (isset($_POST['inscription-password2']) && !empty($_POST['inscription-password2']))&& (isset($_POST['inscription-pseudo']) && !empty($_POST['inscription-pseudo']))) {
	// on teste les deux mots de passe
	if ($_POST['inscription-password'] != $_POST['inscription-password2']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		// on recherche si ce login est déjà utilisé par un autre membre
		$sql = 'SELECT count(*) FROM user WHERE pseudo="'.mysql_escape_string($_POST['inscription-pseudo']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		$data = mysql_fetch_array($req);

		if ($data[0] == 0) {
		$sql = 'INSERT INTO user VALUES("", "'.mysql_escape_string($_POST['inscription-pseudo']).'", "'.mysql_escape_string(md5($_POST['inscription-password'])).'","'.mysql_escape_string($_POST['inscription-email']).'")';
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		session_start();
		$_SESSION['inscription-pseudo'] = $_POST['inscription-pseudo'];
		//header('Location: membre.php');
		exit();
		}
		else {
		$erreur = 'Un membre possède déjà ce login.';
		}
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}

?>
