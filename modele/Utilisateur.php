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
	private $motdepasse;
	
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
	private $motdepasseTemporaire;

	private $listeMessageErreur = [
	
		'identifiant-non-numerique' => 'L\'identifiant doit être un nombre',
		'identifiant-vide' => 'L\'identifiant ne doit pas être vide',
		'identifiant-trop-long' => 'L\'identifiant ne doit pas dépasser 11 chiffre',
	
		'nom-vide' => 'Le nom ne doit pas être vide',
		'nom-trop-long' => 'Le nom ne doit pas faire plus de 24 caractères',
		'nom-non-alphabetique' => 'Le nom doit contenir uniquement des lettres',
		
		'prenom-vide' => 'Le prenom ne doit pas être vide',
		'prenom-trop-long' => 'Le prenom ne doit pas faire plus de 24 caractères',
		'prenom-non-alphabetique' => 'Le prenom doit contenir uniquement des lettres',
		
		'pseudonyme-vide' => 'Le pseudonyme ne doit pas être vide',
		'pseudonyme-trop-long' => 'Le pseudonyme ne doit pas faire plus de 24 caractères',
		
		'email-vide' => 'L\'email ne doit pas être vide',
		'email-invalide' => 'L\'email n\'est pas valide',
		'email-trop -long' => 'L\'email ne doit pas dépasser 30 caractères',
		
		'adresse-vide' => 'L\'adresse ne doit pas être vide',
		'adresse-trop-longue' => 'L\'adresse ne doit pas dépasser 80 caractères',
		
		'codepostal-vide' => 'Le code postal ne doit pas être vide',
		'codepostal-trop-long' => 'Le code postal ne doit pas dépasser 14 caractères',
		
		'pays-vide' => 'Le pays ne doit pas être vide',
		'pays-trop-long' => 'Le pays ne doit pas dépasser 24 caractères',
		
		'ville-vide' => 'La ville ne doit pas être vide',
		'ville-trop-longue' => 'La ville ne doit pas dépasser 24 caractères',
		
		'nbachats-vide' => 'Le nombre d\'achats ne doit pas être vide',
		'nbachats-non-numerique' => 'Le nombre d\'achats doit être un entier',
		'nbachats-trop-long' => 'Le nombre d\'acahts ne doit pas dépasser 11 chiffre',
		
		'nbventes-vide' => 'Le nombre de ventes ne doit pas être vide',
		'nbventes-non-numerique' => 'Le nombre de ventes doit être un entier',
		'nbachats-trop-long' => 'Le nombre d\'achats ne doit pas dépasser 11 chiffres',
		
		'illustration-vide' => 'Une illustration doit être donnée',
		
		'age-vide' => 'l\'âge doit être renseigné',
		'age-non-numerique' => 'l\'âge doit être un entier',
		'age-trop-long' => 'l\'âge ne doit pas dépasser 11 chiffres',
		
		'telephone-vide' => 'Un numéro de téléphone doit être renseigné',
		'telephone-trop-long' => 'Le numéro de téléphone ne doit pas dépasser 16 chiffres',
		
		'role-vide' => 'Un rôle doit être attribué',
		'role-non-numerique' => 'Le rôle doit être un entier',
		'role-trop-long' => 'Le numéro de rôle ne doit pas dépasser 11 chiffres',

		'mdp-vide' => 'Le mot de passe est vide',
		'mdp-trop-court' => 'Le mot de passe ne dépasse pas 8 caractères',
		'mdp-trop-long' => 'Le mot de passe ne doit pas dépasser 20 caractères'
	];
	
	private $listeMessageErreurActif = [];
	
	
	
	public function getidUtilisateur(){
		
		if (isset($this->idUtilisateur)) return $this->idUtilisateur;
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
		if (isset($this->nbachats)) return $this->nbachats;
		else return $this->nbachatsTemporaire;
	}
	
	public function getNbventes(){
		if (isset($this->nbventes)) return $this->nbventes;
		else return $this->nbventesTemporaire;
	}
	
	public function getIllustration(){
		if ($this->illustration) return $this->illustration;
		else return $this->illustrationTemporaire;
	}
		
	public function getAge(){
		if (isset($this->age)) return $this->age;
		else return $this->ageTemporaire;
	}	
	
	public function getTelephone(){
		if ($this->telephone) return $this->telephone;
		else return $this->telephoneTemporaire;
	}
	
	public function getRole(){
		if (isset($this->role)) return $this->role;
		else return $this->roleTemporaire;
	}
	
	public function getMotDePasse(){
		if (isset($this->motdepasse)) return $this->motdepasse;
		else return $this->motDePasseTemporaire;
	}
		
	public function construireDonneesSecurise($idUtilisateur, $nom, $prenom, $pseudonyme, $email, $adresse, $codepostal, $pays, $ville, $nbventes, $nbachats, $illustration, $age, $telephone, $role, $motdepasse){	
		
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
			$this->motdepasse = $motdepasse;
	}
	
	
	public function setIdUtilisateur($idUtilisateur){
					
		$this->idUtilisateurTemporaire = filter_var($idUtilisateur, FILTER_SANITIZE_NUMBER_INT);
								
		if ( !isset($this->idUtilisateurTemporaire)){
			
			$this->listeMessageErreurActif['idUtilisateur'][] = $this->listeMessageErreur['identifiant-vide'];
		}
			
		if ( !filter_var($this->idUtilisateurTemporaire) ){
			
			$this->listeMessageErreurActif['idUtilsateur'][] = $this->listeMessageErreur['identifiant-non-numerique'];
		}	
		
		if ( $this->idUtilisateurTemporaire > 99999999999 ){
			
			$this->listeMessageErreurActif['idUtilsateur'][] = $this->listeMessageErreur['identifiant-trop-long'];			
			
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
		
		if ( strlen($this->nomTemporaire) > 24){
			
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
		
		if ( strlen($this->prenomTemporaire) > 24){
			
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
		
		if ( strlen($this->prenomTemporaire) > 24){
			
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
		
		$this->adresseTemporaire = $adresse;
		
		if ( empty($this->adresseTemporaire)){
			
			$this->listeMessageErreurActif['adresse'][] = $this->listeMessageErreur['adresse-vide'];

		}
		
		if ( !$this->getListeErreurActifPourChamp('adresse') ){
				$this->adresse = $this->adresseTemporaire;
		}
		
		
	}
	
	public function setCodepostal($codepostal){
		
		$this->codepostalTemporaire = filter_var($codepostal, FILTER_SANITIZE_STRING);
		
		if ( empty($this->codepostalTemporaire)){
			
			$this->listeMessageErreurActif['codepostal'][] = $this->listeMessageErreur['codepostal-vide'];
		}
		
		if ( !$this->getListeErreurActifPourChamp('codepostal') ){
				$this->codepostal = $this->codepostalTemporaire;
		}
		
		
	}
	
	public function setPays($pays){
		
		$this->paysTemporaire = filter_var($pays, FILTER_SANITIZE_STRING);
		
		if ( empty($this->paysTemporaire)){
			
			$this->listeMessageErreurActif['pays'][] = $this->listeMessageErreur['pays-vide'];

		}
		
		if ( !$this->getListeErreurActifPourChamp('pays') ){
				$this->pays = $this->paysTemporaire;
		}
		
	}
	
	public function setVille($ville){
		
		$this->villeTemporaire = filter_var($ville, FILTER_SANITIZE_STRING);
		
		if ( empty($this->villeTemporaire)){
			
			$this->listeMessageErreurActif['ville'][] = $this->listeMessageErreur['ville-vide'];
		}
		

		if ( !$this->getListeErreurActifPourChamp('ville') ){
				$this->ville = $this->villeTemporaire;
		}
		
		
	}
	
	public function setNbachats($nbachats){
		
		$this->nbachatsTemporaire = filter_var($nbachats, FILTER_SANITIZE_NUMBER_INT);
		
		if ( !isset($this->nbachatsTemporaire)){
			
			$this->listeMessageErreurActif['nbachats'][] = $this->listeMessageErreur['nbachats-vide'];
		}
		
		if ( !filter_var($this->nbachatsTemporaire, FILTER_VALIDATE_INT) && $this->nbachatsTemporaire != 0 ){
			
			$this->listeMessageErreurActif['nbachats'][] = $this->listeMessageErreur['nbachats-non-numerique'];

		}
		
		if ( $this->nbachatsTemporaire > 99999999999 ){
			
			$this->listeMessageErreurActif['nbachats'][] = $this->listeMessageErreur['nbachats-trop-long'];			
			
		}
		
		if ( !$this->getListeErreurActifPourChamp('nbachats') ){
				$this->nbachats= $this->nbachatsTemporaire;
		}
		
	}
	
	public function setNbventes($nbventes){
		
		$this->nbventesTemporaire = filter_var($nbventes, FILTER_SANITIZE_NUMBER_INT);
		
		if ( !isset($this->nbventesTemporaire)){
			
			$this->listeMessageErreurActif['nbventes'][] = $this->listeMessageErreur['nbventes-vide'];
			
		}
		
		if ( !filter_var($this->nbventesTemporaire, FILTER_VALIDATE_INT) && $this->nbventesTemporaire!= 0){
			
			$this->listeMessageErreurActif['nbventes'][] = $this->listeMessageErreur['nbventes-non-numerique'];

		}
		
		if ( $this->nbventesTemporaire > 99999999999 ){
			
			$this->listeMessageErreurActif['nbventes'][] = $this->listeMessageErreur['nbventes-trop-long'];			
			
		}
		
		if ( !$this->getListeErreurActifPourChamp('nbventes') ){
				$this->nbventes= $this->nbventesTemporaire;
		}
		
	}
	
	public function setIllustration($illustration){
		
		$this->illustrationTemporaire = filter_var($illustration, FILTER_SANITIZE_STRING);
		
		if ( empty($this->illustrationTemporaire)){
			
			$this->listeMessageErreurActif['illustration'][] = $this->listeMessageErreur['illustration-vide'];
			
		}
		
		if ( !$this->getListeErreurActifPourChamp('illustration') ){
				$this->illustration= $this->illustrationTemporaire;
		}	
	}
	
	public function setAge($age){
		
		$this->ageTemporaire = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
		
		if ( !isset($this->ageTemporaire)){
			
			$this->listeMessageErreurActif['age'][] = $this->listeMessageErreur['age-vide'];
			
		}
		
		if ( !filter_var($this->ageTemporaire, FILTER_VALIDATE_INT) ){
			
			$this->listeMessageErreurActif['age'][] = $this->listeMessageErreur['age-non-numerique'];

		}
		
		if ( $this->ageTemporaire > 99999999999 ){
			
			$this->listeMessageErreurActif['age'][] = $this->listeMessageErreur['age-trop-long'];			
			
		}
		
		if ( !$this->getListeErreurActifPourChamp('age') ){
				$this->age= $this->ageTemporaire;
		}
		
	}
	
	public function setTelephone($telephone){
		
		$this->telephoneTemporaire = filter_var($telephone, FILTER_SANITIZE_STRING);
		
		if ( empty($this->telephoneTemporaire)){
			
			$this->listeMessageErreurActif['telephone'][] = $this->listeMessageErreur['telephone-vide'];

		}
		
		if ( $this->telephoneTemporaire > 99999999999 ){
			
			$this->listeMessageErreurActif['telephone'][] = $this->listeMessageErreur['telephone-trop-long'];			
			
		}
		
		if ( !$this->getListeErreurActifPourChamp('telephone') ){
				$this->telephone= $this->telephoneTemporaire;
		}
			
	}
	
	public function setRole($role){
		
		$this->roleTemporaire = filter_var($role, FILTER_SANITIZE_NUMBER_INT);
		
		if ( !isset($this->roleTemporaire)){
			
			$this->listeMessageErreurActif['role'][] = $this->listeMessageErreur['role-vide'];			
			
		}
					
		if ( !filter_var($this->roleTemporaire, FILTER_VALIDATE_INT) && $this->roleTemporaire != 0 ){  // sinon pas considéré comme entier
			
			$this->listeMessageErreurActif['role'][] = $this->listeMessageErreur['role-non-numerique'];

		}
		
		if ( $this->roleTemporaire > 99999999999 ){
			
			$this->listeMessageErreurActif['role'][] = $this->listeMessageErreur['role-trop-long'];			
			
		}
	
		if ( !$this->getListeErreurActifPourChamp('role') ){
				$this->role= $this->roleTemporaire;
		}		
	}
	
	public function setMotDePasse($motdepasse){
		
		$this->motDePasseTemporaire = filter_var($motdepasse, FILTER_SANITIZE_STRING);

		if ( empty($this->motDePasseTemporaire)){
			$this->listeMessageErreurActif['motdepasse'][] = $this->listeMessageErreur['mdp-vide'];
		}

		if (strlen((string)$this->motDePasseTemporaire) < 20){
			$this->listeMessageErreurActif['motdepasse'][] = $this->listeMessageErreur['mdp-trop-long'];
		}
		if (strlen((string)$this->motDePasseTemporaire) < 8){
			$this->listeMessageErreurActif['motdepasse'][] = $this->listeMessageErreur['mdp-trop-court'];
		}
		if ( !$this->getListeErreurActifPourChamp('motdepasse') ){
				$this->motdepasse = $this->motDePasseTemporaire;
		}
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