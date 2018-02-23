<?php

	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	
	if ( isset($_POST['actionFormulaire'])){
		
			$actionFormulaire = $_POST['actionFormulaire'];

			
		switch ( $actionFormulaire ){
		
			case   "Ajouter":

				ajouter();
			
				break;
			
			case   "Modifier":
			
				modifier();
			
				break;
			
			case   "Supprimer":
			
				supprimer();
		
			break;
		}
	
	}	
	
	
	
	function ajouter(){

		
	
		$utilisateur = new Utilisateur();
		
		$utilisateur->setNom($_POST['nom']);
		$utilisateur->setPrenom($_POST['prenom']);
		$utilisateur->setPseudonyme($_POST['pseudonyme']);
		$utilisateur->setEmail($_POST['email']);
		$utilisateur->setAdresse($_POST['adresse']);
		$utilisateur->setCodepostal($_POST['codepostal']);
		$utilisateur->setPays($_POST['pays']);			
		$utilisateur->setVille($_POST['ville']);
		$utilisateur->setAge($_POST['anneenaissance']);
		$utilisateur->setTelephone($_POST['telephone']);	
		$utilisateur->setNbventes($_POST['nbventes']);	
		$utilisateur->setNbachats($_POST['nbachats']);	
		$utilisateur->setRole($_POST['role']);	
		$utilisateur->setIllustration($_POST['illustration']);	
		
		if ($utilisateur->estValide()){
			
			
			
			$utilisateurDAO = new UtilisateurDAO();
			
			$utilisateurDAO->insererUtilisateur($utilisateur);
			
		}
		else{
			
			
			
			
		}
	}
		

	function modifier(){
		
		$utilisateur = new Utilisateur();
		
		$utilisateur->setNom($_POST['nom']);
		$utilisateur->setPrenom($_POST['prenom']);
		$utilisateur->setPseudonyme($_POST['pseudonyme']);
		$utilisateur->setEmail($_POST['email']);
		$utilisateur->setAdresse($_POST['adresse']);
		$utilisateur->setCodepostal($_POST['codepostal']);
		$utilisateur->setPays($_POST['pays']);			
		$utilisateur->setVille($_POST['ville']);
		$utilisateur->setAge($_POST['anneenaissance']);
		$utilisateur->setTelephone($_POST['telephone']);	
		$utilisateur->setNbventes($_POST['nbventes']);	
		$utilisateur->setNbachats($_POST['nbachats']);	
		$utilisateur->setRole($_POST['role']);	
		$utilisateur->setIllustration($_POST['illustration']);	
		
		if ($utilisateur->estValide()){
			
			
			
			$utilisateurDAO = new UtilisateurDAO();
			
			$utilisateurDAO->modifierUtilisateur($utilisateur);
			
		}
		else{
			
			
			
			
		}
		
		
	}
	
	function supprimer(){
		
		
		
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