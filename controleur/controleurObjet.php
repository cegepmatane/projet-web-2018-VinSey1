<?php 

	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	
	
	if ( isset($_GET['actionNaviguation'])){
		
		$idObjet=null;
		
		if (isset($_GET['idObjet'])){
			
			$idObjet = filter_var($_GET['idObjet'], FILTER_SANITIZE_STRING);
			
		}
		
		$actionNaviguation = $_GET['actionNaviguation'];
		
		switch ( $actionNaviguation ){
			
			case gettext("Ajouter"):
			
				afficherFormulaireObjet($actionNaviguation);
			
			
			case gettext("Supprimer"):
				
				if ( $idObjet ){
					
					$objetDAO = new ObjetDAO();
					$objet = $objetDAO->chercherParIdentifiant($idObjet);
					if ( $objet){
						afficherFormulaireObjet($actionNaviguation, $objet);
					}				
					
				}
				
			break;
			
			case gettext("Modifier"):
			
				if ( $idObjet ){
					
					$objetDAO = new ObjetDAO();
					$objet = $objetDAO->chercherParIdentifiant($idObjet);
					if ( $objet){
						afficherFormulaireObjet($actionNaviguation, $objet);
					}
				}
			
			break;
		}
		
	}
		
	else {
		
		
		
		if ( isset($_POST['actionFormulaire'])){
		
		$actionFormulaire = $_POST['actionFormulaire'];
			
		
			
			switch ( $actionFormulaire ){
			
				case gettext("Ajouter"):

					$objet = new Objet();
				
					
				
					if ( ajouter($objet) ){
						
						
						afficherRetroactionPositive(gettext("Ajout d'objet réussi"));

						
					}	
					else{
						
						afficherFormulaireObjet($actionFormulaire, $objet);										
					}
						
				
					break;
				
				case gettext("Modifier"):
				
					$objet = new Objet();
					
					if ( modifier($objet) ){
						
						afficherRetroactionPositive(gettext("Modification d'objet réussi"));
						
					}
					else{
						
						afficherFormulaireObjet($actionFormulaire, $objet);
						
					}
					
				
					break;
				
				case gettext("Supprimer"):
								
					$objet = new Objet();		
								
					if ( supprimer($objet) ){
						
						afficherRetroactionPositive(gettext("Supression d'objet réussi"));
						
					}
					else{
						
						afficherRetroactionNegative(gettext("L'objet n'existe pas"));
					}
			
				break;
			}
			
			
		}
		
	}	
				
			
afficherLienAjoutObjet();
afficherListeObjet();
	
	function ajouter($objet){
		
		$objet->setTitreDeVente($_POST['titreDeVente']);
		$objet->setIdentifiantVendeur($_POST['identifiantVendeur']);
		$objet->setAdresse($_POST['adresse']);	
		$objet->setIllustration($_POST['illustration']);	
		$objet->setCategorie($_POST['categorie']);
		$objet->setPrix($_POST['prix']);
		$objet->setDescriptionProduit($_POST['descriptionProduit']);	
		$objet->setDetailsVente($_POST['detailsVente']);
		$objet->setVedette($_POST['vedette']);
		
		if ($objet->estValide()){
			
			$objetDAO = new ObjetDAO();
			
			$objetDAO->insererObjet($objet);
			
			return true;
		}
		return false;			
	}
		

	function modifier($objet){
				
		if($_POST['vedette'] == "oui"){
			$vedette = 1;
		} else {
			$vedette = 0;
		}
		$objet->setIdObjet($_POST['idObjet']);
		$objet->setTitreDeVente($_POST['titreDeVente']);
		$objet->setIdentifiantVendeur($_POST['identifiantVendeur']);
		$objet->setAdresse($_POST['adresse']);	
		$objet->setIllustration($_POST['illustration']);	
		$objet->setCategorie($_POST['categorie']);
		$objet->setPrix($_POST['prix']);
		$objet->setDescriptionProduit($_POST['descriptionProduit']);	
		$objet->setDetailsVente($_POST['detailsVente']);
		$objet->setVedette($vedette);	
		
		
		/*
		
			estValide ne suffit pas, il faudrait questionner la BD pour savoir si cet objet existe
		
		*/
		
		if ($objet->estValide()){
				
			$objetDAO = new ObjetDAO();
			
			$objetDAO->modifierObjet($objet);
			
			return true;
		}
		return false;
		
		
	}
	
	function supprimer($objet){
		
		$objet->setIdObjet($_POST['idObjet']);
		$objet->setTitreDeVente($_POST['titreDeVente']);
		$objet->setIdentifiantVendeur($_POST['identifiantVendeur']);
		$objet->setAdresse($_POST['adresse']);	
		$objet->setIllustration($_POST['illustration']);	
		$objet->setCategorie($_POST['categorie']);
		$objet->setPrix($_POST['prix']);
		$objet->setDescriptionProduit($_POST['descriptionProduit']);	
		$objet->setDetailsVente($_POST['detailsVente']);
		$objet->setVedette($_POST['vedette']);	
		if ( $objet->estValide() ){
			
			$objetDAO = new ObjetDAO();
		
			$objetDAO->supprimerObjet($objet);
		
			return true;
		}
		
		return false;
		
	}
?>




