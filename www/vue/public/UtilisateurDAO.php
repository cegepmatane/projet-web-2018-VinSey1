<?php

class UtilisateurDAO{
	
	function connection(){
		
		try{
			$PDO = new PDO('mysql:host=localhost; port=3307;dbname=survie_etudiante', 'root', '');
		}
		catch (PDOException $e){
			echo ($e->getMessage());
		}
		return $PDO;
	}
	
	
	function accesseur_par_identifiant($identifiant_demande){
		
		$PDO = $this->connection();
		
		$requete = $PDO->prepare("SELECT * FROM 'utilisateur' WHERE id = :identifiant_demande");
		$requete->bindParam(':identifiant_demande', $identifiant_demande);
		$requete->execute();
		
		$requete->fetch(PDO::FETCH_ASSOC);
		
		return $requete;
	}
	
	function insertion(){
		
		
	}
	
}







?>