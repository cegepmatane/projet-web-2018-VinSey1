<?php
require_once UTILISATEUR_MODELE;
class UtilisateurDAO{
	
	public function chercherParIdentifiant($identifiantDemande){

		$utilisateur = null;
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = :identifiantDemande");
		$requete->bindParam(':identifiantDemande', $identifiantDemande, PDO::PARAM_INT);
		$requete->execute();
				
		$resultat = $requete->fetch(PDO::FETCH_OBJ);		
		
		if ($resultat ){
				
			$utilisateur = new Utilisateur($resultat->id_utilisateur, $resultat->nom, $resultat->prenom);

		}		
		return $utilisateur;
	}
	
	public function insererUtilisateur($utilisateur){
		
		global $connexionBDActive;
	
		$nom = $utilisateur->getNom();
		$prenom = $utilisateur->getPrenom();
	
		$requete = $connexionBDActive->prepare("INSERT INTO utilisateur(prenom, nom) VALUES (:prenom, :nom) ");
		$requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
		$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
		$requete->execute();
		
	}
	
	
	
	public function supprimerUtilisateur($identifiant){
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :identifiant");
		$requete->bindParam(':identifiant', $identifiant, PDO::PARAM_INT);
		$requete->execute();
	}

	
}
?>