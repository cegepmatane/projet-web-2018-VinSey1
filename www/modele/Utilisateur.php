<?php

class Utilisateur{


	private $nom;
	private $prenom;
	private $idUtilisateur;

	public function getNom(){
		
		return $this->nom;
		
	}
	
	public function getPrenom(){
		return $this->prenom;
	}
	
	public function getidUtilisateur(){
		return $this->idUtilisateur;
	}
	
	function __construct($idUtilisateur, $nom, $prenom){
		
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->idUtilisateur = $idUtilisateur;
		
	}
}


?>