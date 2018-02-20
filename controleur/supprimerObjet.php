<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	
	if (isset($_POST['controleur_suppression_objet'])){
	
		
		$objetDAO = new ObjetDAO();
		$objetDAO->supprimerObjet($_POST['idObjet']);

	}


?>