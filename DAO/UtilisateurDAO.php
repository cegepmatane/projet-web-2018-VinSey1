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
				
			$utilisateur = new Utilisateur(
										   $resultat->id_utilisateur,
										   $resultat->nom, 
										   $resultat->prenom,
										   $resultat->pseudonyme,
										   $resultat->email,
										   $resultat->adresse,
										   $resultat->codepostal,
										   $resultat->pays,
										   $resultat->ville,
										   0,
										   0,
										   $resultat->illustration,
										   $resultat->age,
										   $resultat->telephone,
										   $resultat->role
										   );
		}			
		return $utilisateur;
	}
	
	public function insererUtilisateur($utilisateur){
		
		
		global $connexionBDActive;
	
		$nom = $utilisateur->getNom();
		$prenom = $utilisateur->getPrenom();
		$pseudonyme = $utilisateur->getPseudonyme();
		$email = $utilisateur->getEmail();
		$adresse = $utilisateur->getAdresse();
		$codepostal = $utilisateur->getCodepostal();
		$pays = $utilisateur->getPays();
		$ville = $utilisateur->getVille();
		$nbachats = 0;
		$nbventes = 0;
		$illustration = $utilisateur->getIllustration();
		$age = $utilisateur->getAge();
		$telephone = $utilisateur->getTelephone();
		$role = $utilisateur->getRole();
	
		$requete = $connexionBDActive->prepare("INSERT INTO utilisateur(nom, prenom, pseudonyme, email, adresse, codepostal, pays, ville, nbachats, nbventes, illustration, age, telephone, role) VALUES (:nom, :prenom, :pseudonyme, :email, :adresse, :codepostal, :pays, :ville, :nbachats, :nbventes, :illustration, :age, :telephone, :role)");
		
		$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
		$requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
		$requete->bindParam(':pseudonyme', $pseudonyme, PDO::PARAM_STR);
		$requete->bindParam(':email', $email, PDO::PARAM_STR);
		$requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
		$requete->bindParam(':codepostal', $codepostal, PDO::PARAM_STR);
		$requete->bindParam(':pays', $pays, PDO::PARAM_STR);
		$requete->bindParam(':ville', $ville, PDO::PARAM_STR);
		$requete->bindParam(':nbachats', $nbachats, PDO::PARAM_INT);
		$requete->bindParam(':nbventes', $nbventes, PDO::PARAM_INT);
		$requete->bindParam(':illustration', $illustration, PDO::PARAM_STR);
		$requete->bindParam(':age', $age, PDO::PARAM_INT);
		$requete->bindParam(':telephone', $telephone, PDO::PARAM_STR);
		$requete->bindParam(':role', $role, PDO::PARAM_STR);
		$requete->execute();
		
	}
	
	
	
	public function supprimerUtilisateur($identifiant){
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :identifiant");
		$requete->bindParam(':identifiant', $identifiant, PDO::PARAM_INT);
		$requete->execute();
	}

	public function chargerBaseUtilisateur(){
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT *FROM utilisateur");
		
		
	}
	
	
	public function obtenirListeUtilisateur(){
		
		$listeUtilisateur = [];
		global $connexionBDActive;
		$requete = $connexionBDActive->prepare("SELECT * FROM utilisateur");
		$requete->execute();
		
		$resultat = $requete->fetchAll(PDO::FETCH_OBJ);	
		
		foreach($resultat as $key => $enregistrementUtilisateur) {
			$utilisateur = new Utilisateur($enregistrementUtilisateur->id_utilisateur, $enregistrementUtilisateur->nom, $enregistrementUtilisateur->prenom, $enregistrementUtilisateur->pseudonyme, $enregistrementUtilisateur->email, $enregistrementUtilisateur->adresse, $enregistrementUtilisateur->codepostal, $enregistrementUtilisateur->pays, $enregistrementUtilisateur->ville, $enregistrementUtilisateur->nbachats, $enregistrementUtilisateur->nbventes, $enregistrementUtilisateur->illustration, $enregistrementUtilisateur->age, $enregistrementUtilisateur->telephone, $enregistrementUtilisateur->role );
			$listeUtilisateur[]=$utilisateur;
		}
		
				
		return $listeUtilisateur;
				
	}
	
	public function modifierNom($idUtilisateur, $nom){
		
		global $connexionDBActive;
		
		$requete = $connexionBDActive->prepare("UPDATE utilisateur	SET nom = :nom WHERE id_utilisateur = :idUtilisateur");
		$requete->bindParam(':nom', $nom, PDO::PARAM_STR);
		$requete->bindParam(':idUitilisateur', $idUtilisateur, PDO::PARAM_INT);
	
		$requete->execute();
		
	}
	
	public function modifierPrenom($idUtilisateur, $prenom){
		
		global $connexionDBActive;
		
		$requete = $connexionBDActive->prepare("UPDATE utilisateur	SET prenom = :prenom WHERE id_utilisateur = :idUtilisateur");
		$requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
		$requete->bindParam(':idUitilisateur', $idUtilisateur, PDO::PARAM_INT);
	
		$requete->execute();
		
	}
	
	public function modifierPseudonyme($idUtilisateur, $pseudonyme){
		
		global $connexionDBActive;
		
		$requete = $connexionBDActive->prepare("UPDATE utilisateur	SET prenom = :pseudonyme WHERE id_utilisateur = :idUtilisateur");
		$requete->bindParam(':pseudonyme', $pseudonyme, PDO::PARAM_STR);
		$requete->bindParam(':idUitilisateur', $idUtilisateur, PDO::PARAM_INT);
	
		$requete->execute();
		
	}
	
	
}
?>