<?php

class Objet{

	private $idObjet;
	private $identifiantDeVente;
	private $identifiantVendeur;
	private $titreDeVente;
	private $prix;
	private $descriptionProduit;
	private $detailsVente;
	private $adresse;
	private $ville;
	private $illustration;
	

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
	
	public function getPrix(){
		return $this->prix;
	}
	
	public function getDescriptionProduit(){
		return $this->prix;
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
		
		//mettre l'idObjet en paramètre dans le constructeur alors que c'est la base de donnée qui va l'attribuer par auto-incrémentation ?
	function __construct($idObjet, $identifiantDeVente, $identifiantVendeur, $titreDeVente, $prix, $descriptionProduit, $detailsVente, $adresse, $ville, $nbventes, $nbachats, $illustration, $age, $telephone ){
		
		$this->idObjet = $idObjet;
		$this->identifiantDeVente = $identifiantDeVente;
		$this->identifiantVendeur = $identifiantVendeur;
		$this->titreDeVente = $titreDeVente;
		$this->prix = $prix;
		$this->descriptionProduit = $descriptionProduit;
		$this->detailsVente = $detailsVente;
		$this->adresse = $adresse;
		$this->illustration = $illustration;
	
	}
}
?>