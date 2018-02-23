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
	
	private $idUtilisateurTemporaire;
	private $nomTemporaire;
	private $prenomTemporaire;
	private $pseudonymeTemporaire;
	private $emailTemporaire;
	private $adresseTemporaire;
	private $codepostalTemporaire;
	private $paysTemporaire;
	private $villeTemporaire;
	private $nbachatsTemporaire;
	private $nbventesTemporaire;
	private $illustrationTemporaire;
	private $ageTemporaire;
	private $telephoneTemporaire;
	private $roleTemporaire;

	private $listeMessageErreur = [
	
		'nom-vide' => 'Le nom est vide',
		'nom-trop-long' => 'Le nom fait plus de 250 caractères',
		'nom-alphabetique' => 'Le nom doit contenir uniquement des lettres'
		
		
	];
	
	private $listeMessageErreurActif = [];
	
	
	
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
	
	
	public function setIdUtilisateur($idUtilisateur){
		
		
		$this->idUtilisateurTemporaire = $idUtilisateur;
		
		
		//filtres
		
		
		$this->idUtilisateur = $this->idUtilisateurTemporaire;
		
	}
	
	public function setNom($nom){
		
		$this->nomTemporaire = filter_var($nom, FILTER_SANITIZE_STRING);
		
		
		if (empty($this->nomTemporaire)){
			
			
			
			$this->listeMessageErreurActif['nom'][] = $this->listeMessageErreur['nom-vide'];
						
		}
		else{
			if ( strlen($this->nomTemporaire) > 10){
				
				$this->listeMessageErreurActif['nom'][] = $this->listeMessageErreur['nom-trop-long'];
			}
			if ( !ctype_alpha($this->nomTemporaire) ){
				
				$this->listeMessageErreurActif['nom'][] = $this->listeMessageErreur['nom-alphabetique'];
				
			}
						
		}
				
		if ( !$this->getListeErreurActifPourChamp('nom') ){
				$this->nom = $this->nomTemporaire;
		}
			
	}
	
	public function setPrenom($prenom){
		
		$prenomTemporaire = filter_var($prenom, FILTER_SANITIZE_STRING);
		
		if ( empty($this->prenomTemporaire)){
			
			
		}
		
		$this->prenom = $prenom;
		
		
	}
	
	public function setPseudonyme($pseudonyme){
		
		$pseudonymeTemporaire = filter_var($pseudonyme, FILTER_SANITIZE_STRING);
		
		if ( empty($this->pseudonymeTemporaire)){
			
			
		}
		
		
		$this->pseudonyme = $pseudonyme;
		
		
	}
	
	public function setEmail($email){
		
		$emailTemporaire = filter_var($email, FILTER_SANITIZE_STRING);
		
		if ( empty($this->emailTemporaire)){
			
			
		}
		
		$this->email = $email;
		
		
	}
	
	public function setAdresse($adresse){
		
		$adresseTemporaire = filter_var($adresse, FILTER_SANITIZE_STRING);
		
		if ( empty($this->adresseTemporaire)){
			
			
		}
		
		$this->adresse = $adresse;
		
		
	}
	
	public function setCodepostal($codepostal){
		
		$codepostalTemporaire = filter_var($codepostal, FILTER_SANITIZE_STRING);
		
		if ( empty($this->codepostalTemporaire)){
			
			
		}
		
		$this->codepostal = $codepostal;
		
		
	}
	
	public function setPays($pays){
		
		$paysTemporaire = filter_var($pays, FILTER_SANITIZE_STRING);
		
		if ( empty($this->paysTemporaire)){
			
			
		}
		
		$this->pays = $pays;
		
	}
	
	public function setVille($ville){
		
		$villeTemporaire = filter_var($ville, FILTER_SANITIZE_STRING);
		
		if ( empty($this->villeTemporaire)){
			
			
		}
		
		$this->ville = $ville;
		
		
	}
	
	public function setNbachats($nbachats){
		
		$nbachatsTemporaire = filter_var($nbachats, FILTER_SANITIZE_STRING);
		
		if ( empty($this->nbachatsTemporaire)){
			
			
		}
		
		$this->nbachats = $nbachats;
		
	}
	
	public function setNbventes($nbventes){
		
		$nbventesTemporaire = filter_var($nbventes, FILTER_SANITIZE_STRING);
		
		if ( empty($this->nbventesTemporaire)){
			
			
		}
		
		$this->nbventes = $nbventes;
		
	}
	
	public function setIllustration($illustration){
		
		$illustrationTemporaire = filter_var($illustration, FILTER_SANITIZE_STRING);
		
		if ( empty($this->illustrationTemporaire)){
			
			
		}
		
		$this->illustration = $illustration;
		
		
	}
	
	public function setAge($age){
		
		$ageTemporaire = filter_var($age, FILTER_SANITIZE_STRING);
		
		if ( empty($this->ageTemporaire)){
			
			
		}
		
		$this->age = $age;
		
		
	}
	
	public function setTelephone($telephone){
		
		$telephoneTemporaire = filter_var($telephone, FILTER_SANITIZE_STRING);
		
		if ( empty($this->telephoneTemporaire)){
			
			
		}
		
		$this->telephone = $telephone;
		
		
	}
	
	public function setRole($role){
		
		$roleTemporaire = filter_var($role, FILTER_SANITIZE_STRING);
		
		if ( empty($this->roleTemporaire)){
			
			
		}
	
		$this->role = $role;
			
	}

	public function estValide(){
		
		return empty($this->listeMessageErreurActif);
	}
	
	public function getListeErreurActifPourChamp($champ){		
					
		if (isset($this->listeMessageErreurActif[$champ])){
			return $this->listeMessageErreurActif[$champ];
		}
		return [];
	}
	
	
}
?>