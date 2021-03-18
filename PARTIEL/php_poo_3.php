<?php

class Candidat {

//Attributs
	public $id;
	public $nom;
	public $prenom;
	public $note=array();
	public $adr;

//Méthodes et fonctions
	function __construct($id, $nom, $prenom, $dn, $adr) {

		$this->id = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->dn = $dn;
		$this->adr = $adr;
	}

	public function afficher() {

		echo $this->id."<br/>";
		echo $this->nom."<br/>";
		echo $this->prenom."<br/>";
		echo $this->dn."<br/>";
		echo $this->adr."<br/>";
	}
}
/* Traitement de la classe

		echo $pers1->id."<br/>";
		echo $pers1->nom."<br/>";
		echo $pers1->prenom."<br/>";
		echo $pers1->dn."<br/>";
		echo $pers1->adr."<br/>";

*/

?>

