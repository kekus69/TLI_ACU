<?php

$smarty->assign('title', 'ADA - Informations');

//requête qui liste les pathologies, les caracteriqtiques et les sympthomes
$req = $bdd->prepare('SELECT p.desc as patho, k.name as carac, s.desc as symptome
FROM `patho` p inner join `symptPatho` sp on sp.idP = p.idP inner join `symptome` s on s.idS = sp.idS inner join `keySympt` ks on ks.idS = s.idS inner join`keywords` k on k.idk = ks.idK GROUP BY patho, carac, symptome ORDER BY patho asc');

$req->execute();

$list_news = array();
$i = 0;
while($data = $req->fetch()){
    $list_news[$i]['patho'] = $data['patho'];
    $list_news[$i]['carac'] = $data['carac'];
    $list_news[$i]['symptome'] = strtolower($data['symptome']);
    $i++;
}

$smarty->assign('list_news', $list_news);

?>
