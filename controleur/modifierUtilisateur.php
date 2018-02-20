<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;

	if (isset($_POST['controleur_modification_utilisateur'])){
		
		$utilisateurDAO = new UtilisateurDAO();
		
		$utilisateurDAO->modifierNom($_POST['idUtilisateur'], $_POST['nom']);
		$utilisateurDAO->modifierPrenom($_POST['idUtilisateur'], $_POST['prenom']);
		$utilisateurDAO->modifierPseudonyme($_POST['idUtilisateur'], $_POST['pseudonyme']);
		$utilisateurDAO->modifierEmail($_POST['idUtilisateur'], $_POST['email']);
		$utilisateurDAO->modifierAdresse($_POST['idUtilisateur'], $_POST['adresse']);
		$utilisateurDAO->modifierCodepostal($_POST['idUtilisateur'], $_POST['codepostal']);
		$utilisateurDAO->modifierPays($_POST['idUtilisateur'], $_POST['pays']);			
		$utilisateurDAO->modifierVille($_POST['idUtilisateur'], $_POST['ville']);
		$utilisateurDAO->modifierAge($_POST['idUtilisateur'], $_POST['anneenaissance']);
		$utilisateurDAO->modifierTelephone($_POST['idUtilisateur'], $_POST['telephone']);	
		$utilisateurDAO->modifierNbventes($_POST['idUtilisateur'], $_POST['nbventes']);	
		$utilisateurDAO->modifierNbachats($_POST['idUtilisateur'], $_POST['nbachats']);	
		$utilisateurDAO->modifierRole($_POST['idUtilisateur'], $_POST['role']);	
		$utilisateurDAO->modifierIllustration($_POST['idUtilisateur'], $_POST['illustration']);	

	}


?>
<a href="../index.php">Acceuil</a>