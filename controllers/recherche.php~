<?php
 
$smarty->assign('title', 'ADA - Recherche');
 
 
$req = $bdd->prepare('select nom from meridien');
$req->execute();
 
$list_der1 = array();
$i = 0;
while($data = $req->fetch()){
    $list_der1[$i]['nom'] = $data['nom'];
$i++;
}
 
$req = $bdd->prepare('select nom from meridien');
$req->execute();
 
$list_der1 = array();
$i = 0;
while($data = $req->fetch()){
    $list_der1[$i]['nom'] = $data['nom'];
    $list_der1[$i]['code'] = $data['code'];
$i++;
}
 
$req = $bdd->prepare('SELECT DISTINCT type FROM `patho`');
$req->execute();
 
$list_der2 = array();
$i = 0;
while($data = $req->fetch()){
    $list_der2[$i]['type'] = $data['type'];
$i++;
}
 
 
 
if (isset($_POST['meridien']) ){
         
     
    $req = $bdd->prepare('SELECT p.desc AS patho, s.desc AS sympt
FROM symptome s
JOIN symptPatho sp ON s.ids = sp.ids
JOIN patho p ON sp.idp = p.idp
JOIN meridien m ON p.mer = m.code
WHERE m.nom =? AND p.type =?');
    $req->execute(array($_POST['meridien'],$_POST['type']));
    $list_news = array();
$i = 0;
while($data = $req->fetch()){
    $list_news[$i]['patho'] = $data['patho'];
    $list_news[$i]['sympt'] = $data['sympt'];
    $i++;
}
}
else{
     
    $req = $bdd->prepare('SELECT p.desc AS patho, s.desc AS sympt
FROM symptome s
JOIN symptPatho sp ON s.ids = sp.ids
JOIN patho p ON sp.idp = p.idp
JOIN meridien m ON p.mer = m.code');
    $req->execute();
    $list_news = array();
$i = 0;
while($data = $req->fetch()){
    $list_news[$i]['patho'] = $data['patho'];
    $list_news[$i]['sympt'] = $data['sympt'];
$i++;
}
}
 
 
$smarty->assign('list_news', $list_news);
$smarty->assign('list_der1', $list_der1);
$smarty->assign('list_der2', $list_der2);
$smarty->assign('mer', $mer);
?>
