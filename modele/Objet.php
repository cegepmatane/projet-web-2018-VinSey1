<?php

class Objet{

	private $idObjet;
	private $identifiantDeVente;
	private $identifiantVendeur;
	private $titreDeVente;
	private $categorie;
	private $prix;
	private $descriptionProduit;
	private $detailsVente;
	private $adresse;
	private $illustration;
	private $vedette;
	

	public function getIdObjet(){
		return $this->idObjet;
	}
	
	public function getIdentifiantDeVente(){
		return $this->identifiantDeVente;	
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
		

	function __construct($idObjet, $identifiantDeVente, $identifiantVendeur, $titreDeVente, $categorie, $prix, $descriptionProduit, $detailsVente, $adresse, $illustration, $vedette){
		
		$this->idObjet = $idObjet;
		$this->identifiantDeVente = $identifiantDeVente;
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
}
?>