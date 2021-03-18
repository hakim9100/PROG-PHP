<?php

//Définition de la classe Personne

class Personne {
	//Attributs
	protected $id;
	protected $nom;
	protected $prenom;
	protected $mail;
	protected $tel;
	protected $salaire;

	//Constructeur
	function __construct($id, $nom, $prenom, $mail, $tel, $salaire) {
		$this->id = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->mail = $mail;
		$this->tel = $tel;
		$this->salaire = $salaire;
	}

	//Accesseurs
	function getId($id) {
		return $id;
	}

	function getNom($nom) {
		return $nom;
	}
	
	function getPrenom($prenom) {
		return $prenom;
	}

	function getMail($mail) {
		return $mail;
	}

	function getTel($tel) {
		return $tel;
	}

	//Méthodes
	function afficher() {

		echo $this->id."<br/>".$this->nom."<br/>".$this->prenom."<br/>".$this->mail."<br/>".$this->tel;
	}

	function calculerSalaire() { 	}

} //Fin classe Personne


//Définition de la classe Développeur

class Developpeur extends Personne {
//Attributs
	const taux = 0.08;
	private $specialite;

//Constructeur

function __construct($id, $nom, $prenom, $mail, $tel, $salaire, $specialite) {

	parent::__construct($id, $nom, $prenom, $mail, $tel, $salaire);
	$this->specialite = $specialite;
}

function calculerSalaire() {
	return $this->salaire * (1 + taux);
}

function afficher() {
	echo parent::afficher()."<br/>".$this->specialite."<br/>";
}

} //Fin classe Developpeur


//Définition de la classe Manager

class Manager extends Personne {
	
//Attributs
	const taux = 0.11;
	private $service;

//Constructeur

function __construct($id, $nom, $prenom, $mail, $tel, $salaire, $service) {

	parent::__construct($id, $nom, $prenom, $mail, $tel, $salaire);
	
	$this->service = $service;
}

function calculerSalaire() {
	return $this->salaire * (1 + taux);
}

function afficher() {
	echo parent::afficher()."<br/>".$this->service;
} 
}
