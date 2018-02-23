<?php 


	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	
	
	if ( isset($_POST['actionNaviguation'])){
		
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

					$utilisateur = new Utilisateur();
				
					
				
					if ( ajouter($utilisateur) ){
						
						
						afficherRetroactionPositive(gettext("Ajout d'utilisateur réussi"));

						
					}	
					else{
						
						afficherFormulaireUtilisateur($actionFormulaire, $utilisateur);										
					}
						
				
					break;
				
				case   "Modifier":
				
					$utilisateur = new Utilisateur();
					
					if ( modifier($utilisateur) ){
						
						afficherRetroactionPositive(gettext("Modification d'utilisateur réussi"));
						
					}
					else{
						
						afficherFormulaireUtilisateur($actionFormulaire, $utilisateur);
						
					}
					
				
					break;
				
				case   "Supprimer":
								
					$utilisateur = new Utilisateur();		
								
					if ( supprimer($utilisateur) ){
						
						afficherRetroactionPositive(gettext("Supression d'utilisateur réussi"));
						
					}
					else{
						
						afficherRetroactionNegative(gettext("l'utilisateur n'existe pas"));
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















?>