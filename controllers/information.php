<?php

$smarty->assign('title', 'page2');

$listreq = $bdd->prepare('SELECT DISTINCT name FROM `keywords` join keySympt on keywords.idK=keySympt.idK join symptome on keySympt.idS=symptome.idS join symptPatho on symptome.idS=symptPatho.idS join patho on symptPatho.idP=patho.idP');

$listreq->execute(); 


$list_name = array();
$i = 0;
while($data = $listreq->fetch()){
    $list_name[$i]['name'] = $data['name'];
    $i++;
}

$smarty->assign('list_name', $list_name);



$req = $bdd->prepare('SELECT p.desc as patho, s.desc as carac, k.name as exemple
FROM `patho` p inner join `symptPatho` sp on sp.idP = p.idP inner join `symptome` s on s.idS = sp.idS inner join `keySympt` ks on ks.idS = s.idS inner join`keywords` k on k.idk = ks.idK GROUP BY patho, carac, exemple ORDER BY patho asc');

$req->execute();

$list_news = array();
$i = 0;
while($data = $req->fetch()){
    $list_news[$i]['patho_espace'] = str_replace(' ','%20',$data['patho']);
    $list_news[$i]['carac_espace'] = str_replace(' ','%20',$data['carac']);
    $list_news[$i]['exemple_espace'] = str_replace(' ','%20',$data['exemple']);
    $list_news[$i]['patho'] = $data['patho'];
    $list_news[$i]['carac'] = $data['carac'];
    $list_news[$i]['exemple'] = $data['exemple'];
    $i++;
}

$smarty->assign('list_news', $list_news);

?>
