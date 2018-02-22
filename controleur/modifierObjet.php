<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	if (isset($_POST['controleur_modification_objet'])){
		$objet = new ObjetDAO();
		$objet->modifierTitreDeVente($_POST['idObjet'], $_POST['titreDeVente']);
		$objet->modifierDescriptionProduit($_POST['idObjet'], $_POST['descriptionProduit']);
		$objet->modifierTitreDeVente($_POST['idObjet'], $_POST['details']);
		$objet->modifierTitreDeVente($_POST['idObjet'], $_POST['adresse']);
		$objet->modifierTitreDeVente($_POST['idObjet'], $_POST['prix']);
		if (isset($_POST['autre'])){
			$categorie = "autre";
		}
		if (isset($_POST['couverts'])){
			$categorie = "couverts";
		}
		if (isset($_POST['literie'])){
			$categorie = "literie";
		}
		$objet->modifierTitreDeVente($_POST['idObjet'], $categorie);
		
	}


?>