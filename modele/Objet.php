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
		
		$this->idObjet = $idObjet;
		
		
	}
	
	function setidentifiantVendeur($identifiantVendeur){
		
		$this->identifiantVendeur = $identifiantVendeur;
		
		
	}
	function setTitreDeVente($titreDeVente){
		
		$this->titreDeVente = $titreDeVente;
		
		
	}
	function setCategorie($categorie){
		
		$this->categorie = $categorie;
		
		
	}
	function setPrix($prix){
		
		$this->prix = $prix;
		
		
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
	
	
	
	
}
?>