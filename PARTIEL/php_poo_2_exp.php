<?php
require("php_poo_2.php");

$ent = new Entreprise("num", "Techniques Transport", "Lyon");

$pers1 = new Personne(25,"LAROUSSI", "Youcef", "31/10/2009", "Moissy Lieusaint", $ent);

//$pers1->afficher();

echo $pers1->num;

?>

