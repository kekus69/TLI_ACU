<?php

$smarty->assign('title', 'page2');

$req = $bdd->prepare('SELECT name, patho.mer, patho.type, patho.desc FROM `keywords` join keySympt on keywords.idK=keySympt.idK join symptome on keySympt.idS=symptome.idS join symptPatho on symptome.idS=symptPatho.idS join patho on symptPatho.idP=patho.idP');

$req->execute();

$list_news = array();
$i = 0;
while($data = $req->fetch()){
    $list_news[$i]['name'] = $data['name'];
    $list_news[$i]['mer'] = $data['mer'];
    $list_news[$i]['type'] = $data['type'];
    $list_news[$i]['desc'] = $data['desc'];
    $i++;
}

$smarty->assign('list_news', $list_news);


?>
