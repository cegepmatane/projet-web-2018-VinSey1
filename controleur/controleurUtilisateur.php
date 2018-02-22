<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	$actionFormulaire = $_POST['actionFormulaire'];
	
	switch ( $actionFormulaire ){
		
		case   "ajouter":

			ajouter();
		
			break;
		
		case   "modifier":
		
			modifier();
		
			break;
		
		case   "supprimer":
		
			supprimer();
		
			break;
	}
	
	
	
	private function ajouter(){
		
		$utilisateurDAO = new UtilisateurDAO();

		$utilisateur = new Utilisateur();
		
		$utilisateurDAO->setNom($_POST['idUtilisateur'], $_POST['nom']);
		$utilisateurDAO->setPrenom($_POST['idUtilisateur'], $_POST['prenom']);
		$utilisateurDAO->setPseudonyme($_POST['idUtilisateur'], $_POST['pseudonyme']);
		$utilisateurDAO->setEmail($_POST['idUtilisateur'], $_POST['email']);
		$utilisateurDAO->setAdresse($_POST['idUtilisateur'], $_POST['adresse']);
		$utilisateurDAO->setCodepostal($_POST['idUtilisateur'], $_POST['codepostal']);
		$utilisateurDAO->setPays($_POST['idUtilisateur'], $_POST['pays']);			
		$utilisateurDAO->setVille($_POST['idUtilisateur'], $_POST['ville']);
		$utilisateurDAO->setAge($_POST['idUtilisateur'], $_POST['anneenaissance']);
		$utilisateurDAO->setTelephone($_POST['idUtilisateur'], $_POST['telephone']);	
		$utilisateurDAO->setNbventes($_POST['idUtilisateur'], $_POST['nbventes']);	
		$utilisateurDAO->setNbachats($_POST['idUtilisateur'], $_POST['nbachats']);	
		$utilisateurDAO->setRole($_POST['idUtilisateur'], $_POST['role']);	
		$utilisateurDAO->setIllustration($_POST['idUtilisateur'], $_POST['illustration']);	
		
		
		
		
		
		
	}
		

	private function modifier(){
		
		
		
		
	}
	
	private function supprimer(){
		
		
		
	}
	
	
	
	
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
	
	if (isset($_POST['controleur_inscription'])){
		
		$utilisateur = new Utilisateur( 0,
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
	
	if (isset($_POST['controleur_suppression_utilisateur'])){
	
		
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->supprimerUtilisateur($_POST['idUtilisateur']);

	}


?>