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
				
			$objet = new Objet($resultat->id_objet, 
							   $resultat->identifiantDeVente, 
							   $resultat->identifiantVendeur,
							   $resultat->titreDeVente,
							   $resultat->categorie,
							   $resultat->prix,
							   $resultat->descriptionProduit,
							   $resultat->detailsVente,
							   $resultat->adresse,
							   $resultat->illustration	   									   
							   );
		}			
		return $objet;
		
	}
	
	public function insererObjet($objet){
			
			
			global $connexionBDActive;
		
			$identifiantDeVente = $objet->getIdentifiantDeVente();
			$identifiantVendeur = $objet->getIdentifiantVendeur();
			$titreDeVente = $objet->getTitreDeVente();
			$categorie = $objet->getCategorie();
			$prix = $objet->getPrix();
			$descriptionProduit = $objet->getDescriptionProduit();
			$detailsVente = $objet->getDetailsVente();
			$adresse = $objet->getAdresse();
			$illustration = $objet->getIllustration();
			
		
			$requete = $connexionBDActive->prepare("INSERT INTO objet(identifiantDeVente, identifiantVendeur, titreDeVente, categorie, prix, descriptionProduit, detailsVente, adresse, illustration) VALUES (:identifiantDeVente, :identifiantVendeur, :titreDeVente, :categorie, :prix, :descriptionProduit, :detailsVente, :adresse, :illustration)");
			
			$requete->bindParam(':identifiantDeVente', $identifiantDeVente, PDO::PARAM_STR);
			$requete->bindParam(':identifiantVendeur', $identifiantVendeur, PDO::PARAM_STR);
			$requete->bindParam(':titreDeVente', $titreDeVente, PDO::PARAM_STR);
			$requete->bindParam(':categorie', $categorie, PDO::PARAM_STR);
			$requete->bindParam(':prix', $prix, PDO::PARAM_STR);
			$requete->bindParam(':descriptionProduit', $descriptionProduit, PDO::PARAM_STR);
			$requete->bindParam(':detailsVente', $detailsVente, PDO::PARAM_STR);
			$requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
			$requete->bindParam(':illustration', $illustration, PDO::PARAM_STR);
			
			
			$requete->execute();
			
	}
	
	
	
	public function supprimerObjet($identifiant){
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("DELETE FROM objet WHERE id_objet = :identifiant");
		$requete->bindParam(':identifiant', $identifiant, PDO::PARAM_INT);
		$requete->execute();
	}

	public function chargerBaseObjet(){
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT * FROM objet");
		
		
	}
	
	
	public function obtenirListeObjet(){
		
		$listeObjet = [];
		global $connexionBDActive;
		$requete = $connexionBDActive->prepare("SELECT * FROM objet");
		$requete->execute();
		
		$resultat = $requete->fetchAll(PDO::FETCH_OBJ);	
		
		foreach($resultat as $key => $enregistrementObjet) {
			$objet = new Objet($enregistrementObjet->id_objet, $enregistrementObjet->identifiantDeVente, $enregistrementObjet->identifiantVendeur);
			$listeObjet[]=$objet;
		}
		
				
		return $listeobjet;
		
		
	}
	
	
	
	
}

?>
