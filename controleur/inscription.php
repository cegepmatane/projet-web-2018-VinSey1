<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	if (isset($_POST['controleur_inscription'])){
		
		$utilisateur = new Utilisateur(0, $_POST["nom"], $_POST["prenom"], $_POST["pseudonyme"], $_POST["email"], $_POST["adresse"], $_POST["codepostal"], $_POST["ville"], 0, 0, $_POST["illustration"], $_POST["anneenaissance"], $_POST["telephone"]);
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->insererUtilisateur($utilisateur);
		
	}

?>