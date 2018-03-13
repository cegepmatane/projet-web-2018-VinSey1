<?php

require_once OBJET_MODELE;

class ObjetDAO{
	
	public function chercherParIdentifiant($identifiantDemande){
		
		$objet = null;
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT * FROM objet
								WHERE id_objet = :identifiantDemande");
		$requete->bindParam(':identifiantDemande', $identifiantDemande, PDO::PARAM_INT);
		$requete->execute();
			
		$resultat = $requete->fetch(PDO::FETCH_OBJ);					
		
		if ($resultat ){
			
			$objet = new Objet();
			$objet->construireDonneesSecurise(
			
			 				   $resultat->id_objet,
			 				   $resultat->identifiantVendeur,
			 				   $resultat->titreDeVente,
			 				   $resultat->categorie,
			 				   $resultat->prix,
			 				   $resultat->descriptionProduit,
			 				   $resultat->detailsVente,
			 				   $resultat->adresse,
			 				   $resultat->illustration,
			 				   $resultat->vedette
			 				   );
		}	
		return $objet;
		
	}
	
	public function chercherParCategorie($categorieDemande){
		
		switch($categorieDemande){
			
			case 1:
				$categorie = "Literie";
				break;
				
			case 2:
				$categorie = "Cuisine";
				break;
			
			case 3:
				$categorie = "Livres";
				break;
				
			case 4:
				$categorie = "Fournitures de bureau";
				break;
				
			case 5:
				$categorie = "Autres";
				break;
		}
		
		$listeObjet = [];
		global $connexionBDActive;
		$requete = $connexionBDActive->prepare("SELECT * FROM objet WHERE categorie = :categorieDemande");
		$requete->bindParam(':categorieDemande', $categorie, PDO::PARAM_STR);
		$requete->execute();
		
		$resultat = $requete->fetchAll(PDO::FETCH_OBJ);	
		
		foreach($resultat as $key => $enregistrementObjet) {
			$objet = new Objet();
			$objet->construireDonneesSecurise(
								$enregistrementObjet->id_objet, 
								$enregistrementObjet->identifiantVendeur, 
								$enregistrementObjet->titreDeVente, 
								$enregistrementObjet->categorie, 
								$enregistrementObjet->prix, 
								$enregistrementObjet->descriptionProduit, 
								$enregistrementObjet->detailsVente, 
								$enregistrementObjet->adresse, 
								$enregistrementObjet->illustration, 
								$enregistrementObjet->vedette);
			$listeObjet[]=$objet;
		}
		
				
		return $listeObjet;
		
		
	}
	
	
	public function modifierObjet($objet){
		
		global $connexionBDActive;
		
		$idObjet = $objet->getIdObjet();
		$identifiantVendeur = $objet->getIdentifiantVendeur();
		$titreDeVente = $objet->getTitreDeVente();
		$categorie = $objet->getCategorie();
		$prix = $objet->getPrix();
		$descriptionProduit = $objet->getDescriptionProduit();
		$detailsVente = $objet->getDetailsVente();
		$adresse = $objet->getAdresse();
		$illustration = $objet->getIllustration();
		$vedette = $objet->getVedette();
		
	
		$requete = $connexionBDActive->prepare("UPDATE objet SET 
			identifiantVendeur=:identifiantVendeur,
			titreDeVente=:titreDeVente,
			categorie=:categorie,
			prix=:prix,
			descriptionProduit=:descriptionProduit,
			detailsVente=:detailsVente,
			adresse=:adresse,
			illustration=:illustration,
			vedette=:vedette
			WHERE id_objet =:idObjet");
		
		$requete->bindParam(':idObjet', $idObjet, PDO::PARAM_STR);
		$requete->bindParam(':identifiantVendeur', $identifiantVendeur, PDO::PARAM_STR);
		$requete->bindParam(':titreDeVente', $titreDeVente, PDO::PARAM_STR);
		$requete->bindParam(':categorie', $categorie, PDO::PARAM_STR);
		$requete->bindParam(':prix', $prix, PDO::PARAM_STR);
		$requete->bindParam(':descriptionProduit', $descriptionProduit, PDO::PARAM_STR);
		$requete->bindParam(':detailsVente', $detailsVente, PDO::PARAM_STR);
		$requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
		$requete->bindParam(':illustration', $illustration, PDO::PARAM_STR);
		$requete->bindParam(':vedette', $vedette, PDO::PARAM_INT);
		
		$requete->execute();
	}
	
	public function insererObjet($objet){
			
			
			global $connexionBDActive;
		
			$identifiantVendeur = $objet->getIdentifiantVendeur();
			$titreDeVente = $objet->getTitreDeVente();
			$categorie = $objet->getCategorie();
			$prix = $objet->getPrix();
			$descriptionProduit = $objet->getDescriptionProduit();
			$detailsVente = $objet->getDetailsVente();
			$adresse = $objet->getAdresse();
			$illustration = $objet->getIllustration();
			$vedette = $objet->getVedette();
			
		
			$requete = $connexionBDActive->prepare("INSERT INTO objet(
				identifiantVendeur, 
				titreDeVente, 
				categorie, 
				prix, 
				descriptionProduit, 
				detailsVente, 
				adresse, 
				illustration, 
				vedette) 
				VALUES ( 
				:identifiantVendeur, 
				:titreDeVente, 
				:categorie, 
				:prix, 
				:descriptionProduit, 
				:detailsVente, 
				:adresse, 
				:illustration, 
				:vedette)");
			
			$requete->bindParam(':identifiantVendeur', $identifiantVendeur, PDO::PARAM_STR);
			$requete->bindParam(':titreDeVente', $titreDeVente, PDO::PARAM_STR);
			$requete->bindParam(':categorie', $categorie, PDO::PARAM_STR);
			$requete->bindParam(':prix', $prix, PDO::PARAM_STR);
			$requete->bindParam(':descriptionProduit', $descriptionProduit, PDO::PARAM_STR);
			$requete->bindParam(':detailsVente', $detailsVente, PDO::PARAM_STR);
			$requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
			$requete->bindParam(':illustration', $illustration, PDO::PARAM_STR);
			$requete->bindParam(':vedette', $vedette, PDO::PARAM_INT);
			
			$requete->execute();
			
	}
	
	
	
	public function supprimerObjet($objet){
		
		global $connexionBDActive;
		
		$idObjet = $objet->getIdObjet();
		
		
		$requete = $connexionBDActive->prepare("DELETE FROM objet WHERE id_objet = :identifiant");
		$requete->bindParam(':identifiant', $idObjet, PDO::PARAM_INT);
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
			$objet = new Objet();
			$objet->construireDonneesSecurise(
				$enregistrementObjet->id_objet, 
				$enregistrementObjet->identifiantVendeur, 
				$enregistrementObjet->titreDeVente, 
				$enregistrementObjet->categorie, 
				$enregistrementObjet->prix, 
				$enregistrementObjet->descriptionProduit, 
				$enregistrementObjet->detailsVente, 
				$enregistrementObjet->adresse, 
				$enregistrementObjet->illustration, 
				$enregistrementObjet->vedette);
			$listeObjet[]=$objet;
		}
		
				
		return $listeObjet;
		
		
	}
	
	public function compterObjet() {
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT COUNT(*) as NbObjet FROM objet");
		$requete->execute();
		
		$resulat = $requete->fetch(PDO::FETCH_ASSOC);
		
		echo $resulat['NbObjet'];
		
		
	}
	
	public function compterObjetParCategorie($categorieDemande) {
		
		switch($categorieDemande){
			
			case 1:
				$categorie = "Literie";
				break;
				
			case 2:
				$categorie = "Cuisine";
				break;
			
			case 3:
				$categorie = "Livres";
				break;
				
			case 4:
				$categorie = "Fournitures de bureau";
				break;
				
			case 5:
				$categorie = "Autres";
				break;
		}
		
		global $connexionBDActive;
		
		$requete = $connexionBDActive->prepare("SELECT COUNT(*) as NbObjet FROM objet WHERE categorie = :categorieDemande");
		$requete->bindParam(':categorieDemande', $categorie, PDO::PARAM_STR);
		$requete->execute();
		
		$resulat = $requete->fetch(PDO::FETCH_ASSOC);
		
		echo $resulat['NbObjet'];
		
		
		
		
	
		
	}

}
?>
