<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;

	if (isset($_POST['controleur_suppression_utilisateur'])){
	
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->supprimerUtilisateur($_POST['idUtilisateur']);

	}


?>