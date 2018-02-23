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
	
		'identifiant-non-numerique' => 'L\'identifiant doit être un nombre',
		'identifiant-vide' => 'L\'identifiant ne doit pas être vide',
	
		'nom-vide' => 'Le nom ne doit pas être vide',
		'nom-trop-long' => 'Le nom ne doit pas faire plus de 250 caractères',
		'nom-non-alphabetique' => 'Le nom doit contenir uniquement des lettres',
		
		'prenom-vide' => 'Le prenom ne doit pas être vide',
		'prenom-trop-long' => 'Le prenom ne doit pas faire plus de 250 caractères',
		'prenom-non-alphabetique' => 'Le prenom doit contenir uniquement des lettres',
		
		'pseudonyme-vide' => 'Le pseudonyme ne doit pas être vide',
		'pseudonyme-trop-long' => 'Le pseudonyme ne doit pas faire plus de 250 caractères',
		
		'email-vide' => 'L\'email ne doit pas être vide',
		'email-invalide' => 'L\'email n\'est pas valide'
	];
	
	private $listeMessageErreurActif = [];
	
	
	
	public function getidUtilisateur(){
		
		if ($this->idUtilisateur) return $this->idUtilisateur;
		else return $this->idUtilisateurTemporaire;
	}
	
	public function getNom(){
		if ($this->nom) return $this->nom;
		else return $this->nomTemporaire;
	}
	
	public function getPrenom(){
		if ($this->prenom) return $this->prenom;
		else return $this->prenomTemporaire;
	}
	
	public function getPseudonyme(){
		if ($this->pseudonyme) return $this->pseudonyme;
		else return $this->pseudonymeTemporaire;
	}
	
	public function getEmail(){
		if ( $this->email ) return $this->email;
		else return $this->emailTemporaire;
	}
	
	public function getAdresse(){
		if ($this->adresse) return $this->adresse;
		else return $this->adresseTemporaire;
	}
	
	public function getCodepostal(){
		if ($this->codepostal) return $this->codepostal;
		else return $this->codepostalTemporaire;
	}

	public function getPays(){
		if ($this->pays) return $this->pays;
		else return $this->paysTemporaire;	
	} 
	
	public function getVille(){
		if ($this->ville) return $this->ville;
		else return $this->villeTemporaire;
	}
	
	public function getNbachats(){
		if ($this->nbachats) return $this->nbachats;
		else return $this->nbachatsTemporaire;
	}
	
	public function getNbventes(){
		if ($this->nbventes) return $this->nbventes;
		else return $this->nbventesTemporaire;
	}
	
	public function getIllustration(){
		if ($this->illustration) return $this->illustration;
		else return $this->illustrationTemporaire;
	}
		
	public function getAge(){
		if ($this->age) return $this->age;
		else return $this->ageTemporaire;
	}	
	
	public function getTelephone(){
		if ($this->telephone) return $this->telephone;
		else return $this->telephoneTemporaire;
	}
	
	public function getRole(){
		if ($this->role) return $this->role;
		else return $this->roleTemporaire;
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
		
		if ( empty($this->idUtilisateurTemporaire)){
			
			$this->listeMessageErreurActif['idUtilisateur'][] = $this->listeMessageErreur['identifiant-vide'];
		}
			
		if ( !filter_var($this->idUtilisateurTemporaire) ){
			
			$this->listeMessageErreurActif['idUtilsateur'][] = $this->listeMessageErreur['identifiant-non-numerique'];
		}	
		
		if ( !$this->getListeErreurActifPourChamp('idUtilisateur')){
			
			$this->idUtilisateur = $this->idUtilisateurTemporaire;
			
		}
		
	}
	
	public function setNom($nom){
		
		$this->nomTemporaire = filter_var($nom, FILTER_SANITIZE_STRING);
		
		
		if (empty($this->nomTemporaire)){
			
			$this->listeMessageErreurActif['nom'][] = $this->listeMessageErreur['nom-vide'];
						
		}
		
		if ( strlen($this->nomTemporaire) > 250){
			
			$this->listeMessageErreurActif['nom'][] = $this->listeMessageErreur['nom-trop-long'];
		}
		
		if ( !ctype_alpha($this->nomTemporaire) ){
			
			$this->listeMessageErreurActif['nom'][] = $this->listeMessageErreur['nom-non-alphabetique'];
			
		}
									
		if ( !$this->getListeErreurActifPourChamp('nom') ){
				$this->nom = $this->nomTemporaire;
		}
			
	}
	
	public function setPrenom($prenom){
		
		$this->prenomTemporaire = filter_var($prenom, FILTER_SANITIZE_STRING);

		
		if ( empty($this->prenomTemporaire)){
			
			$this->listeMessageErreurActif['prenom'][] = $this->listeMessageErreur['prenom-vide'];
		}
		
		if ( strlen($this->prenomTemporaire) > 250){
			
			$this->listeMessageErreurActif['prenom'][] = $this->listeMessageErreur['prenom-trop-long'];
		}
		
		if ( !ctype_alpha($this->prenomTemporaire) ){
			
			$this->listeMessageErreurActif['prenom'][] = $this->listeMessageErreur['prenom-non-alphabetique'];
			
		}	
		
		if ( !$this->getListeErreurActifPourChamp('prenom') ){
				$this->prenom = $this->prenomTemporaire;
		}
		
		
	}
	
	public function setPseudonyme($pseudonyme){
		
		$this->pseudonymeTemporaire = filter_var($pseudonyme, FILTER_SANITIZE_STRING);
		
		if ( empty($this->pseudonymeTemporaire)){
			
			$this->listeMessageErreurActif['pseudonyme'][] = $this->listeMessageErreur['pseudonyme-vide'];

		}
		
		if ( strlen($this->prenomTemporaire) > 250){
			
			$this->listeMessageErreurActif['pseudonyme'][] = $this->listeMessageErreur['pseudonyme-trop-long'];
		}
				
		if ( !$this->getListeErreurActifPourChamp('pseudonyme') ){
				$this->pseudonyme = $this->pseudonymeTemporaire;
		}
		
		
	}
	
	public function setEmail($email){
		
		$this->emailTemporaire = filter_var($email, FILTER_SANITIZE_STRING);
		
		if ( empty($this->emailTemporaire)){
			
			$this->listeMessageErreurActif['email'][] = $this->listeMessageErreur['email-vide'];
			
		}
		if ( !filter_var($this->emailTemporaire, FILTER_VALIDATE_EMAIL) ){
			
			$this->listeMessageErreurActif['email'][] = $this->listeMessageErreur['email-invalide'];
			
		}
		if ( !$this->getListeErreurActifPourChamp('email') ){
				$this->email = $this->emailTemporaire;
		}
		
		
	}
	
	public function setAdresse($adresse){
		
		$this->adresseTemporaire = filter_var($adresse, FILTER_SANITIZE_STRING);
		
		if ( empty($this->adresseTemporaire)){
			
			
		}
		
		$this->adresse = $adresse;
		
		
	}
	
	public function setCodepostal($codepostal){
		
		$this->codepostalTemporaire = filter_var($codepostal, FILTER_SANITIZE_STRING);
		
		if ( empty($this->codepostalTemporaire)){
			
			
		}
		
		$this->codepostal = $codepostal;
		
		
	}
	
	public function setPays($pays){
		
		$this->paysTemporaire = filter_var($pays, FILTER_SANITIZE_STRING);
		
		if ( empty($this->paysTemporaire)){
			
			
		}
		
		$this->pays = $pays;
		
	}
	
	public function setVille($ville){
		
		$this->villeTemporaire = filter_var($ville, FILTER_SANITIZE_STRING);
		
		if ( empty($this->villeTemporaire)){
			
			
		}
		
		$this->ville = $ville;
		
		
	}
	
	public function setNbachats($nbachats){
		
		$this->nbachatsTemporaire = filter_var($nbachats, FILTER_SANITIZE_STRING);
		
		if ( empty($this->nbachatsTemporaire)){
			
			
		}
		
		$this->nbachats = $nbachats;
		
	}
	
	public function setNbventes($nbventes){
		
		$this->nbventesTemporaire = filter_var($nbventes, FILTER_SANITIZE_STRING);
		
		if ( empty($this->nbventesTemporaire)){
			
			
		}
		
		$this->nbventes = $nbventes;
		
	}
	
	public function setIllustration($illustration){
		
		$this->illustrationTemporaire = filter_var($illustration, FILTER_SANITIZE_STRING);
		
		if ( empty($this->illustrationTemporaire)){
			
			
		}
		
		$this->illustration = $illustration;
		
		
	}
	
	public function setAge($age){
		
		$this->ageTemporaire = filter_var($age, FILTER_SANITIZE_STRING);
		
		if ( empty($this->ageTemporaire)){
			
			
		}
		
		$this->age = $age;
		
		
	}
	
	public function setTelephone($telephone){
		
		$this->telephoneTemporaire = filter_var($telephone, FILTER_SANITIZE_STRING);
		
		if ( empty($this->telephoneTemporaire)){
			
			
		}
		
		$this->telephone = $telephone;
		
		
	}
	
	public function setRole($role){
		
		$this->roleTemporaire = filter_var($role, FILTER_SANITIZE_STRING);
		
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