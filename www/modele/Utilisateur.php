<?php

class Utilisateur{


	private $nom;
	private $prenom;
	private $idUtilisateur;

	public function getNom(){
		
		return $this->nom;
		
	}
	
	function __construct($idUtilisateur, $nom, $prenom){
		
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->idUtilisateur = $idUtilisateur;
		
	}
	
	
	
	
}


?>