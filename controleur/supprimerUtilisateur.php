<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	var_dump($_POST);
	if (isset($_POST['controleur_suppression_utilisateur'])){
	
		echo("saluss");
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->supprimerUtilisateur($_POST['idUtilisateur']);

	}


?>