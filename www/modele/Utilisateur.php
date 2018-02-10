<?php

class Utilisateur{

	private $idUtilisateur;
	private $nom;
	private $prenom;
	private $pseudonyme;
	private $email;
	private $adresse;
	private $codepostal;
	private $pays;
	private $ville;
	private $nbachats;
	private $nbventes;
	private $illustration;
	private $age;
	private $telephone;

	public function getidUtilisateur(){
		return $this->idUtilisateur;
	}
	
	public function getNom(){
		return $this->nom;	
	}
	
	public function getPrenom(){
		return $this->prenom;
	}
	
	public function getPseudonyme(){
		return $this->pseudonyme;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getAdresse(){
		return $this->email;
	}
	
	public function getCodepostal(){
		return $this->codepostal;
	}

	public function getPays(){
		return $this->pays;
	} 
	
	public function getVille(){
		return $this->ville;
	}
	
	public function getNbachats(){
		return $this->nbachats;
	}
	
	public function getNbventes(){
		return $this->nbventes;
	}
	
	public function getIllustration(){
		return $this->illustration;
	}
		
	public function getAge(){
		return $this->age;
	}	
	
	public function getTelephone(){
		return $this->telephone;
	}
		//mettre l'idUtilisateur en paramètre dans le constructeur alors que c'est la base de donnée qui va l'attribuer par auto-incrémentation ?
	function __construct($idUtilisateur, $nom, $prenom, $pseudonyme, $email, $adresse, $codepostal, $pays, $ville, $nbventes, $nbachats, $illustrations, $age, $telephone ){
		
		$this->idUtilisateur = $idUtilisateur;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->pseudonyme = $pseudonyme;
		$this->email = $email;
		$this->adresse = $adresse;
		$this->codepostal = $codepostal;
		$this->pays = $pays;
		$this->ville = $ville;
		$this->nbventes = $nbventes;
		$this->nbachats = $nbachats;
		$this->illustration = $illustration;
		$this->age = $age;
		$this->telephone = $telephone;
			
	}
}
?>