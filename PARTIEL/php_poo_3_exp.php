<?php
require("php_poo_2.php");


$ent1 = new Entreprise("ALSTOM", "Techniques Transport", "Lyon");
$ent2 = new Entreprise("ENGIE", "Energie", "Paris");

$pers = array(new Personne(15,"LAROUSSI", "Youcef", "31/10/2009", "Moissy Lieusaint", $ent1), 
			  new Personne(25,"LAROUSSI", "Meryam", "12/12/2002", "Moissy Lieusaint", $ent2)); 

$pers[0]->afficher();
$pers[1]->afficher();
?>

