<?php
require_once UTILISATEUR_MODELE;
class UtilisateurDAO{
	
	public function chercherParIdentifiant($identifiantDemande){

		$utilisateur = null;
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = :identifiantDemande");
		$requete->bindParam(':identifiantDemande', $identifiantDemande, PDO::PARAM_INT);
		$requete->execute();
		
		//$requete->setFetchMode(PDO::FETCH_OBJ);
		
		$resultat = $requete->fetch(PDO::FETCH_OBJ);		
		
		if ($resultat ){
				
			$utilisateur = new Utilisateur($resultat->id_utilisateur, $resultat->nom, $resultat->prenom);

		}		
		return $utilisateur;
	}
	
	function insertion(){
		
		
	}
	
	//Fonction de test de connexion à la vase de donnée
	function test(){
		
		global $connexionDBActive;
		
		$requete = $PDO->prepare("SHOW TABLES FROM survie_etudiante");
		$requete->execute();
		
		$requete->setFetchMode(PDO::FETCH_ASSOC);
		
		return $requete->fetchAll();
		
	}
	
}
?>