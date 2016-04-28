<?php
//Récupération des nombres à traiter
$first = $_GET['first'];
$second= $_GET['second'];

if($_GET['operande'] == 'addition') {
	echo $first + $second;
}
else if($_GET['operande'] == 'soustraction') {
	echo $first - $second;
}
else if($_GET['operande'] == 'multiplication') {
	echo $first * $second;
} 
else if($_GET['operande'] == 'division') {
	echo $first / $second;
}
?>
