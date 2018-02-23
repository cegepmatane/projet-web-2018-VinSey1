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
				
			$utilisateur = new Utilisateur();
				
			$utilisateur->construireDonneesSecurise(
										   $resultat->id_utilisateur,
										   $resultat->nom, 
										   $resultat->prenom,
										   $resultat->pseudonyme,
										   $resultat->email,
										   $resultat->adresse,
										   $resultat->codepostal,
										   $resultat->pays,
										   $resultat->ville,
										   $resultat->nbachats,
										   $resultat->nbventes,
										   $resultat->illustration,
										   $resultat->age,
										   $resultat->telephone,
										   $resultat->role
										   );
		}			
		return $utilisateur;
	}
	
	public function modifierUtilisateur($utilisateur){
		
		global $connexionBDActive;
	
		
	
		$idUtilisateur = $utilisateur->getidUtilisateur();
		$nom = $utilisateur->getNom();
		$prenom = $utilisateur->getPrenom();
		$pseudonyme = $utilisateur->getPseudonyme();
		$email = $utilisateur->getEmail();
		$adresse = $utilisateur->getAdresse();
		$codepostal = $utilisateur->getCodepostal();
		$pays = $utilisateur->getPays();
		$ville = $utilisateur->getVille();
		$nbachats = $utilisateur->getNbachats();
		$nbventes = $utilisateur->getNbventes();
		$illustration = $utilisateur->getIllustration();
		$age = $utilisateur->getAge();
		$telephone = $utilisateur->getTelephone();
		$role = $utilisateur->getRole();
	
		$requete = $connexionBDActive->prepare("UPDATE utilisateur SET nom=:nom, prenom=:prenom, pseudonyme=:pseudonyme, email=:email, adresse=:adresse, codepostal=:codepostal, pays=:pays, ville=:ville, nbachats=:nbachats, nbventes=:nbventes, illustration=:illustration, age=:age, telephone=:telephone, role=:role WHERE id_utilisateur=:idUtilisateur ");
												
		
		$requete->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
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
	
	
	
	public function supprimerUtilisateur($utilisateur){
		
		global $connexionBDActive;
				
		$idUtilisateur = $utilisateur->getidUtilisateur();
		$nom = $utilisateur->getNom();
		$prenom = $utilisateur->getPrenom();
		$pseudonyme = $utilisateur->getPseudonyme();
		
		$requete = $connexionBDActive->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :identifiant AND nom = :nom AND prenom=:prenom AND pseudonyme = :pseudonyme");
		
		$requete->bindParam(':identifiant', $idUtilisateur, PDO::PARAM_INT);
		$requete->bindParam(':nom', $nom, PDO::PARAM_INT);
		$requete->bindParam(':prenom', $prenom, PDO::PARAM_INT);
		$requete->bindParam(':pseudonyme', $pseudonyme, PDO::PARAM_INT);

		
		
		
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
			
			$utilisateur = new Utilisateur();
			
			$utilisateur->construireDonneesSecurise($enregistrementUtilisateur->id_utilisateur, $enregistrementUtilisateur->nom, $enregistrementUtilisateur->prenom, $enregistrementUtilisateur->pseudonyme, $enregistrementUtilisateur->email, $enregistrementUtilisateur->adresse, $enregistrementUtilisateur->codepostal, $enregistrementUtilisateur->pays, $enregistrementUtilisateur->ville, $enregistrementUtilisateur->nbachats, $enregistrementUtilisateur->nbventes, $enregistrementUtilisateur->illustration, $enregistrementUtilisateur->age, $enregistrementUtilisateur->telephone, $enregistrementUtilisateur->role );
						
			
			$listeUtilisateur[]=$utilisateur;
		}
		
				
		return $listeUtilisateur;
				
	}
	
}
?>