<?php
require("php_poo_1.php");

$pers1 = new Personne(15,"LAROUSSI", "Youcef", "31/10/2009", "Moissy Lieusaint");

/* 
echo $pers1->id."<br/>";
echo $pers1->nom."<br/>";
echo $pers1->prenom."<br/>";
echo $pers1->dn."<br/>";
echo $pers1->adr."<br/>";
*/

$pers1->afficher();

?>

