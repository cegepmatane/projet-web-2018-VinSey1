<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	if (isset($_POST['controleur_modification_objet'])){
		$objet = new ObjetDAO();
		$objet->modifierTitreDeVente($_POST['idObjet'], $_POST['titreDeVente']);
		
	}


?>