<?php

	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	if ( isset($_GET['actionNaviguation'])){
		
		$idUtilisateur = null;
		
		if (isset($_GET['idUtilisateur'])){
			
			$idUtilisateur = filter_var($_GET['idUtilisateur'], FILTER_SANITIZE_STRING);
			
		}
		
		$actionNaviguation = $_GET['actionNaviguation'];
		
		switch ( $actionNaviguation ){
			
			case "Ajouter":
			
				afficherFormulaireUtilisateur($actionNaviguation);
			
			
			case "Supprimer":
				
				if ( $idUtilisateur ){
					
					$utilisateurDAO = new UtilisateurDAO();
					$utilisateur = $utilisateurDAO->chercherParIdentifiant($idUtilisateur);
					if ( $utilisateur){
						afficherFormulaireUtilisateur($actionNaviguation, $utilisateur);
					}				
					
				}
				
			break;
			
			case "Modifier":
			
				if ( $idUtilisateur ){
					
					$utilisateurDAO = new UtilisateurDAO();
					$utilisateur = $utilisateurDAO->chercherParIdentifiant($idUtilisateur);
					if ( $utilisateur){						
						afficherFormulaireUtilisateur($actionNaviguation, $utilisateur);
					}
				}
			
			break;
		}
		
	}
	else {
		
		
		
		if ( isset($_POST['actionFormulaire'])){
		
		$actionFormulaire = $_POST['actionFormulaire'];
			
		
			
			switch ( $actionFormulaire ){
			
				case   "Ajouter":

					$utilisateur = new Utilisateur();
				
					
				
					if ( ajouter($utilisateur) ){
						
						
						afficherRetroactionPositive(gettext("Ajout d'utilisateur réussi"));

						
					}	
					else{
						
						afficherFormulaireUtilisateur($actionFormulaire, $utilisateur);										
					}
						
				
					break;
				
				case   "Modifier":
				
					$utilisateur = new Utilisateur();
					
					if ( modifier($utilisateur) ){
						
						afficherRetroactionPositive(gettext("Modification d'utilisateur réussi"));
						
					}
					else{
						
						afficherFormulaireUtilisateur($actionFormulaire, $utilisateur);
						
					}
					
				
					break;
				
				case   "Supprimer":
								
					$utilisateur = new Utilisateur();		
								
					if ( supprimer($utilisateur) ){
						
						afficherRetroactionPositive(gettext("Supression d'utilisateur réussi"));
						
					}
					else{
						
						afficherRetroactionNegative(gettext("l'utilisateur n'existe pas"));
					}
			
				break;
			}
			
			
		}
		
	}
		
afficherLienAjoutUtilisateur();
afficherListeUtilisateur();
	
	
	
	
	function ajouter($utilisateur){

		
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
			
			return true;
		}
		return false;			
	}
		

	function modifier($utilisateur){
				
		$utilisateur->setIdUtilisateur($_POST['idUtilisateur']);
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
				
		/*
		
			estValide ne suffit pas, il faudrait questionner la BD pour savoir si cet utilisateur existe
		
		*/
		
		if ($utilisateur->estValide()){
				
			$utilisateurDAO = new UtilisateurDAO();
			
			$utilisateurDAO->modifierUtilisateur($utilisateur);
			
			return true;
		}
		return false;
		
		
	}
	
	function supprimer($utilisateur){
		
		
		$utilisateur->setIdUtilisateur($_POST['idUtilisateur']);
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
		
		
		if ( $utilisateur->estValide() ){
			
			$utilisateurDAO = new UtilisateurDAO();
		
			$utilisateurDAO->supprimerUtilisateur($utilisateur);
		
			return true;
		}
		
		return false;
		
	}
?>