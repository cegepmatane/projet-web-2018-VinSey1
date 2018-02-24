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
			
			case "Ajouter":
			
				afficherFormulaireObjet($actionNaviguation);
			
			
			case "Supprimer":
				
				if ( $idObjet ){
					
					$objetDAO = new ObjetDAO();
					$objet = $objetDAO->chercherParIdentifiant($idObjet);
					if ( $objet){
						afficherFormulaireObjet($actionNaviguation, $objet);
					}				
					
				}
				
			break;
			
			case "Modifier":
			
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
			
				case   "Ajouter":

					$objet = new objet();
				
					
				
					if ( ajouter($objet) ){
						
						
						afficherRetroactionPositive(gettext("Ajout d'objet réussi"));

						
					}	
					else{
						
						afficherFormulaireobjet($actionFormulaire, $objet);										
					}
						
				
					break;
				
				case   "Modifier":
				
					$objet = new objet();
					
					if ( modifier($objet) ){
						
						afficherRetroactionPositive(gettext("Modification d'objet réussi"));
						
					}
					else{
						
						afficherFormulaireobjet($actionFormulaire, $objet);
						
					}
					
				
					break;
				
				case   "Supprimer":
								
					$objet = new objet();		
								
					if ( supprimer($objet) ){
						
						afficherRetroactionPositive(gettext("Supression d'objet réussi"));
						
					}
					else{
						
						afficherRetroactionNegative(gettext("l'objet n'existe pas"));
					}
			
				break;
			}
			
			
		}
		
	}	
				
			$actionFormulaire = $_POST['actionFormulaire'];

			
		switch ( $actionFormulaire ){
		
			case   "Ajouter":

				ajouter();
			
				break;
			
			case   "Modifier":
			
				modifier();
			
				break;
			
			case   "Supprimer":
			
				supprimer();
		
			break;
		}
	
	}	
	
	function ajouter(){
		
		//$objet = new Objet();		
		
		
		
		$objet = new Objet( 0,
							"session",
							$_POST["titreDeVente"],
							$categorie, 
							$_POST["prix"],
							$_POST["descriptionProduit"], 
							$_POST["details"],
							$_POST["adresse"],
							"image",
							0
							);	

		$objetDAO = new ObjetDAO();
		$objetDAO->insererObjet($objet);
		
		
	}
	
	function modifier(){
		
		
	}
	
	function supprimer(){
		
		
	}
	
	
	
	
	if (isset($_POST['controleur_suppression_objet'])){
	
		
		$objetDAO = new ObjetDAO();
		$objetDAO->supprimerObjet($_POST['idObjet']);

	}

	if ( isset($_POST['controleur_vente'])){
	
		if ( isset($_POST['couverts'])){
			$categorie = "0";
		}
		else if ( isset($_POST['literie'] )){
			$categorie = "1";
		}
		else{
			$categorie = "10";
		}
		
		$objet = new Objet( 0,
							"session",
							$_POST["titreDeVente"],
							$categorie, 
							$_POST["prix"],
							$_POST["descriptionProduit"], 
							$_POST["details"],
							$_POST["adresse"],
							"image",
							0
							);	

		$objetDAO = new ObjetDAO();
		$objetDAO->insererObjet($objet);	
	}
	
	else {
		
		
		
		if ( isset($_POST['actionFormulaire'])){
		
		$actionFormulaire = $_POST['actionFormulaire'];
			
		
			
			switch ( $actionFormulaire ){
			
				case   "Ajouter":

					$objet = new Objet();
				
					
				
					if ( ajouter($objet) ){
						
						
						afficherRetroactionPositive(gettext("Ajout d'objet réussi"));

						
					}	
					else{
						
						afficherFormulaireObjet($actionFormulaire, $objet);										
					}
						
				
					break;
				
				case   "Modifier":
				
					$objet = new Objet();
					
					if ( modifier($objet) ){
						
						afficherRetroactionPositive(gettext("Modification d'objet réussi"));
						
					}
					else{
						
						afficherFormulaireObjet($actionFormulaire, $objet);
						
					}
					
				
					break;
				
				case   "Supprimer":
								
					$objet = new Objet();		
								
					if ( supprimer($objet) ){
						
						afficherRetroactionPositive(gettext("Supression d'objet réussi"));
						
					}
					else{
						
						afficherRetroactionNegative(gettext("l'objet n'existe pas"));
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




