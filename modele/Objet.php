<?php

	require_once FILTRES;

class Objet{

	private $idObjet;
	private $identifiantVendeur;
	private $titreDeVente;
	private $categorie;
	private $prix;
	private $descriptionProduit;
	private $detailsVente;
	private $adresse;
	private $illustration;
	private $vedette;

	private $idObjetTemporaire;
	private $identifiantVendeurTemporaire;
	private $titreDeVenteTemporaire;
	private $categorieTemporaire;
	private $prixTemporaire;
	private $descriptionProduitTemporaire;
	private $detailsVenteTemporaire;
	private $adresseTemporaire;
	private $illustrationTemporaire;
	private $vedetteTemporaire;

	private $listeMessageErreur = [

		'titre-vide' => 'Le titre est vide',
		'titre-trop-long' => 'Le titre fait plus de 30 caractères',
		'titre-caracteres-speciaux' => 'Le titre contient des caractères invalides',

		'id-vide' => 'L\'ID est vide',
		'id-trop-long' => 'L\'ID fait plus de 11 caractères',
		'id-caracteres-speciaux' => 'L\'ID contient des caractères invalides',

		'identifiant-vide' => 'L\'identifiant du vendeur est vide',
		'identifiant-trop-long' => 'L\'identifiant du vendeur fait plus de 12 caractères',
		'identifiant-caracteres-speciaux' => 'L\'identifiant du vendeur contient des caractères invalides',

		'prix-vide' => 'Le prix est vide ou contient des caractères invalides',
		'prix-caracteres-speciaux' => 'Le prix contient des caractères invalides',

		'description-vide' => 'La description est vide',
		'description-trop-long' => 'La description fait plus de 500 caractères',
		'description-caracteres-speciaux' => 'La description contient des caractères invalides',

		'details-vide' => 'Les détails sont vides',
		'details-trop-long' => 'Les détails font plus de 500 caractères',
		'details-caracteres-speciaux' => 'Les détails contiennent des caractères invalides',

		'adresse-vide' => 'L\'adresse est vide',
		'adresse-trop-long' => 'L\'adresse fait plus de 50 caractères',
		'adresse-caracteres-speciaux' => 'L\'adresse contient des caractères invalides',

		'illustration-vide' => 'L\'illustration est vide',
		'illustration-trop-long' => 'L\'illustration fait plus de 50 caractères',
		'illustration-caracteres-speciaux' => 'L\'illustration contient des caractères invalides',

		'categorie-vide' => 'La catégorie est vide',
		'categorie-trop-long' => 'La catégorie fait plus de 20 caractères',
		'categorie-caracteres-speciaux' => 'La catégorie contient des caractères invalides',

		'vedette-vide' => 'Vedette est vide ou contient des caractères invalides',
		'vedette-trop-long' => 'Vedette fait plus de 11 caractères',
		'vedette-caracteres-speciaux' => 'Vedette contient des caractères invalides',

	];

	private $listeMessageErreurActif = [];

	public function getIdObjet(){
		return $this->idObjet;
	}
	
	public function getIdentifiantVendeur(){
		return $this->identifiantVendeur;
	}
	
	public function getTitreDeVente(){
		return $this->titreDeVente;
	}
	
	public function getCategorie(){
		return $this->categorie;
	} 
	
	public function getPrix(){
		return $this->prix;
	}
	
	public function getDescriptionProduit(){
		return $this->descriptionProduit;
	}

	public function getDetailsVente(){
		return $this->detailsVente;
	}

	public function getAdresse(){
		return $this->adresse;
	} 
	
	public function getIllustration(){
		return $this->illustration;
	}
	
	public function getVedette(){
		return $this->vedette;
	}
		
	public function construireDonneesSecurise($idObjet, $identifiantVendeur, $titreDeVente, $categorie, $prix, $descriptionProduit, $detailsVente, $adresse, $illustration, $vedette){
		
		$this->idObjet = $idObjet;
		$this->identifiantVendeur = $identifiantVendeur;
		$this->titreDeVente = $titreDeVente;
		$this->categorie = $categorie;
		$this->prix = $prix;
		$this->descriptionProduit = $descriptionProduit;
		$this->detailsVente = $detailsVente;
		$this->adresse = $adresse;
		$this->illustration = $illustration;
		$this->vedette = $vedette;
		
	}	
	
	function setIdObjet($idObjet){
		
		$this->idObjetTemporaire = filter_var($idObjet, FILTER_SANITIZE_NUMBER_INT);
		if (empty($this->idObjetTemporaire)){
			$this->listeMessageErreurActif['id'][] = $this->listeMessageErreur['id-vide'];
		} else {
			if (strlen((string)$this->idObjetTemporaire) > 11){
				$this->listeMessageErreurActif['id'][] = $this->listeMessageErreur['id-trop-long'];
			}
			if (!ctype_digit((string)$this->idObjetTemporaire)){
				$this->listeMessageErreurActif['id'][] = $this->listeMessageErreur['id-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('id')){
			$this->idObjet = $this->idObjetTemporaire;
		}

	}
	
	function setIdentifiantVendeur($identifiantVendeur){
		
		$this->identifiantVendeurTemporaire = filter_var($identifiantVendeur, FILTER_SANITIZE_STRING);
		if (empty($this->identifiantVendeurTemporaire)){
			$this->listeMessageErreurActif['identifiantVendeur'][] = $this->listeMessageErreur['identifiant-vide'];
		} else {
			if (strlen($this->identifiantVendeurTemporaire) > 12){
				$this->listeMessageErreurActif['identifiantVendeur'][] = $this->listeMessageErreur['identifiant-trop-long'];
			}
			if (!ctype_digit($this->identifiantVendeurTemporaire)){
				$this->listeMessageErreurActif['identifiantVendeur'][] = $this->listeMessageErreur['identifiant-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('identifiantVendeur')){
			$this->identifiantVendeur = $this->identifiantVendeurTemporaire;
		}

	}

	function setTitreDeVente($titreDeVente){

		$this->titreDeVenteTemporaire = filter_var($titreDeVente, FILTER_SANITIZE_STRING);
		if (empty($this->titreDeVenteTemporaire)){
			$this->listeMessageErreurActif['titre'][] = $this->listeMessageErreur['titre-vide'];
		} else {
			if (strlen($this->titreDeVenteTemporaire) > 30){
				$this->listeMessageErreurActif['titre'][] = $this->listeMessageErreur['titre-trop-long'];
			}
			if (!verifAlphaNum($this->titreDeVenteTemporaire)){
				$this->listeMessageErreurActif['titre'][] = $this->listeMessageErreur['titre-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('titre')){
			$this->titreDeVente = $this->titreDeVenteTemporaire;
		}

	}

	function setCategorie($categorie){

		$this->categorieTemporaire = filter_var($categorie, FILTER_SANITIZE_STRING);
		if (empty($this->categorieTemporaire)){
			$this->listeMessageErreurActif['categorie'][] = $this->listeMessageErreur['categorie-vide'];
		} else {
			if (strlen($this->categorieTemporaire) > 20){
				$this->listeMessageErreurActif['categorie'][] = $this->listeMessageErreur['categorie-trop-long'];
			}
			if (!verifAlpha($this->categorieTemporaire)){
				$this->listeMessageErreurActif['categorie'][] = $this->listeMessageErreur['categorie-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('categorie')){
			$this->categorie = $this->categorieTemporaire;
		}

	}

	function setPrix($prix){

		$this->prixTemporaire = filter_var($prix, FILTER_SANITIZE_NUMBER_FLOAT);
		if (empty($this->prixTemporaire)){
			$this->listeMessageErreurActif['prix'][] = $this->listeMessageErreur['prix-vide'];
		} else {
			if (!ctype_digit($this->prixTemporaire)){
				$this->listeMessageErreurActif['prix'][] = $this->listeMessageErreur['prix-caracteres-speciaux'];
			}
		}
		
		if(!$this->getListeErreurActifPourChamp('prix')){
			$this->prix = $this->prixTemporaire;
		}

	}

	function setDescriptionProduit($descriptionProduit){
		
		$this->descriptionProduitTemporaire = filter_var($descriptionProduit, FILTER_SANITIZE_STRING);
		if (empty($this->descriptionProduitTemporaire)){
			$this->listeMessageErreurActif['description'][] = $this->listeMessageErreur['description-vide'];
		} else {
			if (strlen($this->descriptionProduitTemporaire) > 500){
				$this->listeMessageErreurActif['description'][] = $this->listeMessageErreur['description-trop-long'];
			}
			if (!verifAlphaNum($this->descriptionProduitTemporaire)){
				$this->listeMessageErreurActif['description'][] = $this->listeMessageErreur['description-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('description')){
			$this->descriptionProduit = $this->descriptionProduitTemporaire;
		}
		
	}

	function setDetailsVente($detailsVente){
		
		$this->detailsVenteTemporaire = filter_var($detailsVente, FILTER_SANITIZE_STRING);
		if (empty($this->detailsVenteTemporaire)){
			$this->listeMessageErreurActif['details'][] = $this->listeMessageErreur['details-vide'];
		} else {
			if (strlen($this->detailsVenteTemporaire) > 500){
				$this->listeMessageErreurActif['details'][] = $this->listeMessageErreur['details-trop-long'];
			}
			if (!verifAlphaNum($this->detailsVenteTemporaire)){
				$this->listeMessageErreurActif['details'][] = $this->listeMessageErreur['details-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('details')){
			$this->detailsVente = $this->detailsVenteTemporaire;
		}
		
	}

	function setAdresse($adresse){
		
		$this->adresseTemporaire = $adresse;
		
		if ( empty($this->adresseTemporaire)){
			
			$this->listeMessageErreurActif['adresse'][] = $this->listeMessageErreur['adresse-vide'];

		} else {
			if (!verifAlphaNum($this->adresseTemporaire)){
				$this->listeMessageErreurActif['adresse'][] = $this->listeMessageErreur['adresse-caracteres-speciaux'];
			}
		}
		
		if ( !$this->getListeErreurActifPourChamp('adresse') ){
				$this->adresse = $this->adresseTemporaire;
		}
		
	}

	function setIllustration($illustration){
		
		$this->illustrationTemporaire = filter_var($illustration, FILTER_SANITIZE_STRING);
		if (empty($this->illustrationTemporaire)){
			$this->listeMessageErreurActif['illustration'][] = $this->listeMessageErreur['illustration-vide'];
		} else {
			if (strlen($this->illustrationTemporaire) > 50){
				$this->listeMessageErreurActif['illustration'][] = $this->listeMessageErreur['illustration-trop-long'];
			}
			if (!verifAlphaNum($this->illustrationTemporaire)){
				$this->listeMessageErreurActif['illustration'][] = $this->listeMessageErreur['illustration-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('illustration')){
			$this->illustration = $this->illustrationTemporaire;
		}
		
	}

	function setVedette($vedette){

		$this->vedetteTemporaire = filter_var($vedette, FILTER_SANITIZE_NUMBER_INT);
		if (is_null($this->vedetteTemporaire)){
			$this->listeMessageErreurActif['vedette'][] = $this->listeMessageErreur['vedette-vide'];
		} else {
			if (strlen((string)$this->vedetteTemporaire) > 11){
				$this->listeMessageErreurActif['vedette'][] = $this->listeMessageErreur['vedette-trop-long'];
			}
			/*
			if (!ctype_digit($this->vedetteTemporaire)){
				$this->listeMessageErreurActif['vedette'][] = $this->listeMessageErreur['vedette-caracteres-speciaux'];
			}*/
		}

		if(!$this->getListeErreurActifPourChamp('vedette')){
			$this->vedette = $this->vedetteTemporaire;
		}


	}

	public function getListeErreurActifPourChamp($champ){		

		if (isset($this->listeMessageErreurActif[$champ])){
			return $this->listeMessageErreurActif[$champ];
		}
		return [];

	}
	
	public function estValide(){
		return empty($this->listeMessageErreurActif);
	}
}
?>