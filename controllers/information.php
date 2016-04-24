<?php

$smarty->assign('title', 'ADA - Informations');

$req = $bdd->prepare('SELECT p.desc as patho, k.name as carac, s.desc as exemple
FROM `patho` p inner join `symptPatho` sp on sp.idP = p.idP inner join `symptome` s on s.idS = sp.idS inner join `keySympt` ks on ks.idS = s.idS inner join`keywords` k on k.idk = ks.idK GROUP BY patho, carac, exemple ORDER BY patho asc');

$req->execute();

$list_news = array();
$i = 0;
while($data = $req->fetch()){
    $list_news[$i]['patho'] = $data['patho'];
    $list_news[$i]['carac'] = $data['carac'];
    $list_news[$i]['exemple'] = strtolower($data['exemple']);
    $i++;
}

$smarty->assign('list_news', $list_news);

?>
