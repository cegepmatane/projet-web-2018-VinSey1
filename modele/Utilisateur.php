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
	private $role;

	
	
	
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
		return $this->adresse;
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
	
	public function getRole(){
		return $this->role;
	}
		
	public function construireDonneesSecurise($idUtilisateur, $nom, $prenom, $pseudonyme, $email, $adresse, $codepostal, $pays, $ville, $nbventes, $nbachats, $illustration, $age, $telephone, $role ){	
		
		
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
			$this->role = $role;
		}
		else{
			echo 'adresse mail invalide</br>';
		}	
	}
	
	public function setNom($nom){
		
		$this->nom = $nom;
		
		
	}
	
	public function setPrenom($prenom){
		
		$this->prenom = $prenom;
		
		
	}
	
	public function setPseudonyme($nom){
		
		$this->pseudonyme = $pseudonyme;
		
		
	}
	
	public function setEmail($nom){
		
		$this->email = $email;
		
		
	}
	
	public function setAdresse($nom){
		
		$this->adresse = $adresse;
		
		
	}
	
	public function setCodepostal($nom){
		
		$this->codepostal = $codepostal;
		
		
	}
	
	public function setPays($nom){
		
		$this->pays = $pays;
		
	}
	
	public function setVille($nom){
		
		$this->ville = $ville;
		
		
	}
	
	public function setNbachats($nom){
		
		
		$this->nbachats = $nbachats;
		
	}
	
	public function setNbventes($nom){
		
		
		$this->nbventes = $nbventes;
		
	}
	
	public function setIllustration($nom){
		
		$this->illustration = $illustration;
		
		
	}
	
	public function setAge($nom){
		
		$this->age = $age;
		
		
	}
	
	public function setTelephone($nom){
		
		$this->telephone = $telephone;
		
		
	}
	
	public function setRole($nom){
		
		$this->role = $role;
		
		
	}

	
}
?>