<?php 


	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	
	
	if ( isset($_POST['actionFormulaire'])){
		
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
















?>