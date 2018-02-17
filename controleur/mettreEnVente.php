<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	
	if ( isset($_POST['controleur_vente'])){
		
		if ( isset($_POST['couverts'])){
			$categorie = 0;
		}
		else if ( isset($_POST['literie'] )){
			$categorie = 1;
		}
		else{
			$categorie = 10;
		}
		
		$objet = new Objet(0,
							$_SESSION["utilisateurCourant"], 
							$_POST["titreDeVente"],
							$_POST["titreDeVente"],
							$categorie, 
							$_POST["prix"],
							$categorie, 
							$_POST["descriptionProduit"], 
							$_POST["details"],
							$_POST["adresse"],
							$_POST["illustration"],
							0
							)			
	}


?>