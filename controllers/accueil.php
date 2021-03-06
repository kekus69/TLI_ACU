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

if(isset($_SESSION)){
	//rediriger vers bonjour.tpl 
}

//Si le formulaire connexion a été submit
if (isset($_POST['Login'])) {
	//on test les 2 champs
	if ((isset($_POST['login-email']) && !empty($_POST['login-email'])) && (isset($_POST['login-password']) && !empty($_POST['login-password']))) {
		//on vérifie que le mail existe
		$req = $bdd->prepare('SELECT count(*) FROM user WHERE email="'.mysql_escape_string($_POST['login-email']).'"');
		$req->execute();
		$data = $req->fetch();
		if ($data[0] != 0) {
			//on vérifie la combinaison mail/password
			$req = $bdd->prepare('SELECT passe FROM user WHERE email="'.mysql_escape_string($_POST['login-email']).'"');
			$req->execute();
			$data = $req->fetch();
			$pass=md5($_POST['login-password']);
			if ($data[0] == $pass) {
				//on récupère le pseudo : 
				$req = $bdd->prepare('SELECT pseudo FROM user WHERE email="'.mysql_escape_string($_POST['login-email']).'"');
				$req->execute();
				$pseudo = $req->fetch();
				//on lance une session
				session_start();
				$_SESSION["login"] = $pseudo[0];

			}else{
				$erreur = 'Password erroné';
			}
		}else{
			$erreur = 'Adresse mail non connue';
		}
	}else{
		$erreur = 'Les champs email et password doivent être remplis';
	}
	echo $erreur;

	
	
}


//Si le formulaire d'inscription a été submit
if (isset($_POST['Inscription'])) {
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['inscription-email']) && !empty($_POST['inscription-email'])) && (isset($_POST['inscription-password']) && !empty($_POST['inscription-password'])) && (isset($_POST['inscription-password2']) && !empty($_POST['inscription-password2']))&& (isset($_POST['inscription-pseudo']) && !empty($_POST['inscription-pseudo']))) {
	// on teste les deux mots de passe
	if ($_POST['inscription-password'] != $_POST['inscription-password2']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		// on recherche si ce login et le mail est déjà utilisé par un autre membre
		$req = $bdd->prepare('SELECT count(*) FROM user WHERE pseudo="'.mysql_escape_string($_POST['inscription-pseudo']).'"');
		$req->execute();
		$data = $req->fetch();
		$req = $bdd->prepare('SELECT count(*) FROM user WHERE email="'.mysql_escape_string($_POST['inscription-email']).'"');
		$req->execute();
		$data2 = $req->fetch();
		if (($data[0] == 0)&&($data2[0]==0)) {

			$req = $bdd->prepare('INSERT INTO user VALUES("", "'.mysql_escape_string($_POST['inscription-pseudo']).'", "'.mysql_escape_string(md5($_POST['inscription-password'])).'","'.mysql_escape_string($_POST['inscription-email']).'")');
			$req->execute() or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
			session_start();
			$_SESSION['login'] = $_POST['inscription-pseudo'];
			echo("bjr".$_SESSION['login'].".");
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
	echo $erreur;

}



?>
