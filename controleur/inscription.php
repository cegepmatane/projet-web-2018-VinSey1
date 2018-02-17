<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	if (isset($_POST['controleur_inscription'])){
		
		$utilisateur = new Utilisateur( 
									   $_POST["nom"],
									   $_POST["prenom"],
									   $_POST["pseudonyme"],
									   $_POST["email"],
									   $_POST["adresse"],
									   $_POST["codepostal"],
									   $_POST["pays"],
									   $_POST["ville"],
									   0, 
									   0,
									   "image",
									   56,
									   $_POST["telephone"],
									   0
									   );
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->insererUtilisateur($utilisateur);
		
	}
	

?>