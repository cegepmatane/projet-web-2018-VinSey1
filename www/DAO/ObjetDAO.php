<?php
require_once OBJET_MODELE;

class ObjetDAO{
	
	public function chercherParIdentifiant($identifiantDemande){

		$objet = null;
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT * FROM objet WHERE id_objet = :identifiantDemande");
		$requete->bindParam(':identifiantDemande', $identifiantDemande, PDO::PARAM_INT);
		$requete->execute();
				
		$resultat = $requete->fetch(PDO::FETCH_OBJ);		
		
		if ($resultat ){
				
			$objet = new objet($resultat->id_objet, $resultat->prix, $resultat->adresse);

		}		
		return $objet;
	}
	
		public function insererobjet($objet){
	/*	
		global $connexionBDActive;
	
		$nom = $objet->getNom();
		$prenom = $objet->getPrenom();
	
		$requete = $connexionBDActive->prepare("INSERT INTO objet(prenom, nom) VALUES (:prenom, :nom) ");
		$requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
		$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
		$requete->execute();
		
	}
	
	*/
	
	//public function supprimerobjet($objet){
		/*
		global $connexionBDActive;
		
		$id = $objet->getIdobjet();
		$prenom = $objet->getPrenom();
		$nom = $objet->getNom();
		
		$requete-> = $connexionBDActive->prepare();
		*/
	}

	
}
?>