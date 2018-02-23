<?php

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

		'titre-vide' => 'Le nom est vide',
		'titre-trop-long' => 'Le titre fait plus de 250 caractères',
		'titre-caracteres-speciaux' => 'Le titre contient des caractères invalides',

		'id-vide' => 'L\'ID est vide',
		'id-trop-long' => 'L\'ID fait plus de 11 caractères',
		'titre-caracteres-speciaux' => 'L\'ID contient des caractères invalides',

		'identifiant-vide' => 'L\'identifiant du vendeur est vide',
		'identifiant-trop-long' => 'L\identifiante du vendeur est trop long',
		'identifiant-caracteres-speciaux' => 'L\'identifiant du vendeur contient des caractères invalides',

		'prix-vide' => 'Le prix est vide',
		'prix-caracteres-speciaux' => 'Le prix contient des caractères invalides',

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
		
	
		
		
	function __construct($idObjet, $identifiantVendeur, $titreDeVente, $categorie, $prix, $descriptionProduit, $detailsVente, $adresse, $illustration, $vedette){

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
	
	function setId($idObjet){
		
		$this->idObjetTemporaire = filter_var($idObjet, FILTER_SANITIZE_NUMBER_INT);
		if (empty($this->idObjetTemporaire)){
			$this->listeMessageErreurActif['id'][] = $thislisteMessageErreur['id-vide'];
		} else {
			if (strlen((string)$this->idObjetTemporaire) > 11){
				$this->listeMessageErreurActif['id'][] = $thislisteMessageErreur['id-trop-long'];
			}
			if (!ctype_digit((string)$this->idObjetTemporaire)){
				$this->listeMessageErreurActif['id'][] = $thislisteMessageErreur['id-caracteres-speciaux'];
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
			if (!ctype_alnum($this->identifiantVendeurTemporaire)){
				$this->listeMessageErreurActif['identifiantVendeur'][] = $this->listeMessageErreur['identifiant-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('identifiantVendeur')){
			$this->titreDeVente = $this->identifiantVendeurTemporaire;
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
			if (!ctype_alpha($this->titreDeVenteTemporaire)){
				$this->listeMessageErreurActif['titre'][] = $this->listeMessageErreur['titre-caracteres-speciaux'];
			}
		}

		if(!$this->getListeErreurActifPourChamp('titre')){
			$this->titreDeVente = $this->titreDeVenteTemporaire;
		}

	}

	function setCategorie($categorie){
		
		$this->categorie = $categorie;
		
		
	}

	function setPrix($prix){

		$this->prixTemporaire = filter_var($prix, FILTER_SANITIZE_NUMBER_FLOAT);
		if (empty($this->prixTemporaire)){
			$this->listeMessageErreurActif['prix'][] = $thislisteMessageErreur['prix-vide'];
		} else {
			if (!ctype_digit((string)$this->prixTemporaire)){
				$this->listeMessageErreurActif['prix'][] = $thislisteMessageErreur['prix-caracteres-speciaux'];
			}
		}
		
		if(!$this->getListeErreurActifPourChamp('prix')){
			$this->prix = $this->prixTemporaire;
		}

	}

	function setDescriptionProduit($DescriptionProduit){
		
		$this->descriptionProduit = $descriptionProduit;
		
		
	}

	function setDetailsVente($idObjet){
		
		$this->detailsVente = $detailsVente;
		
		
	}
	function setAdresse($adresse){
		
		$this->adresse = $adresse;
		
		
	}
	function setIllustration($illustration){
		
		$this->illustration = $illustration;
		
		
	}
	function setVedette($vedette){
		
		$this->vedette = $vedette;
		
		
	}

	public function getListeErreurActifPourChamp($champ){		

		if (isset($this->listeMessageErreurActif[$champ])){
			return $this->listeMessageErreurActif[$champ];
		}
		return [];

	}
	
	
}
?>