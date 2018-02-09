<?php

class Objet{


	private $idObjet;
	private $prix;
	private $adresse;

	public function getIdObjet(){
		
		return $this->id_objet;
		
	}
	
	public function getPrix(){
		return $this->prix;
	}
	
	public function getAdresse(){
		return $this->adresse;
	}
	
	function __construct($idObjet, $prix, $adresse){
		$this->idObjet = $idObjet;
		$this->prix = $prix;
		$this->adresse = $adresse;
		
		
	}
}


?>