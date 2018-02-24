<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;

	
	if ( isset($_POST['actionFormulaire'])){
		
				
		if ( $_POST['actionFormulaire'] == 'finPremierFormulaire' ){
			
			$utilisateur = new Utilisateur();
			
			$utilisateur->setNom($_POST['nom']);
			$utilisateur->setPrenom($_POST['prenom']);
			$utilisateur->setPseudonyme($_POST['pseudonyme']);
			$utilisateur->setAge($_POST['anneenaissance']);		
			$utilisateur->setIllustration($_POST['illustration']);
			
			if ( $utilisateur->estValide()){
				
				afficherDeuxiemeFormulaire($utilisateur);
			}
			else{
				
				$_POST['utilisateur'] = $utilisateur;
				afficherPremierFormulaire($utilisateur);
				
			}
			
			
		}else if ( $_POST['actionFormulaire'] == 'finDeuxiemeFormulaire' ){
				
			$utilisateur = new Utilisateur();
			
			$utilisateur->setNom($_POST['nom']);
			$utilisateur->setPrenom($_POST['prenom']);
			$utilisateur->setPseudonyme($_POST['pseudonyme']);
			$utilisateur->setAge($_POST['anneenaissance']);		
			$utilisateur->setIllustration($_POST['illustration']);
			$utilisateur->setAdresse($_POST['adresse']);
			$utilisateur->setCodepostal($_POST['codepostal']);
			$utilisateur->setPays($_POST['pays']);			
			$utilisateur->setVille($_POST['ville']);
			
			if ( $utilisateur->estValide() ){
				
				afficherTroisiemeFormulaire($utilisateur);
			}
			else{
				
				afficherDeuxiemeFormulaire($utilisateur);
			}			
		}
		else if ( $_POST['actionFormulaire'] == 'finTroisiemeFormulaire' ){
			
			$utilisateur = new Utilisateur();
		
			$utilisateur->setNom($_POST['nom']);
			$utilisateur->setPrenom($_POST['prenom']);
			$utilisateur->setPseudonyme($_POST['pseudonyme']);
			$utilisateur->setAge($_POST['anneenaissance']);		
			$utilisateur->setIllustration($_POST['illustration']);
			$utilisateur->setAdresse($_POST['adresse']);
			$utilisateur->setCodepostal($_POST['codepostal']);
			$utilisateur->setPays($_POST['pays']);			
			$utilisateur->setVille($_POST['ville']);
			$utilisateur->setTelephone($_POST['telephone']);
			$utilisateur->setEmail($_POST['email']);
			
			if ( $utilisateur->estValide() ){
				
				ajouter($utilisateur);
				afficherRetroactionPositive(gettext("Votre compte a bien été créé"));
			}
			else{
				
				afficherTroisiemeFormulaire($utilisateur);

			}
			
		}
		else if ( $_POST['actionFormulaire'] == 'PrecedentDeuxiemeFormulaire' ){
			
			$utilisateur = new Utilisateur();
			
			$utilisateur->setNom($_POST['nom']);
			$utilisateur->setPrenom($_POST['prenom']);
			$utilisateur->setPseudonyme($_POST['pseudonyme']);
			$utilisateur->setAge($_POST['anneenaissance']);
			$utilisateur->setIllustration($_POST['illustration']);
				
			afficherPremierFormulaire($utilisateur);
			
		}
		else if ( $_POST['actionFormulaire'] == 'PrecedentTroisiemeFormulaire' ){
			
			$utilisateur = new Utilisateur();
			
			$utilisateur->setNom($_POST['nom']);
			$utilisateur->setPrenom($_POST['prenom']);
			$utilisateur->setPseudonyme($_POST['pseudonyme']);
			$utilisateur->setAge($_POST['anneenaissance']);
			$utilisateur->setIllustration($_POST['illustration']);
			
			$utilisateur->setAdresse($_POST['adresse']);
			$utilisateur->setCodepostal($_POST['codepostal']);
			$utilisateur->setPays($_POST['pays']);			
			$utilisateur->setVille($_POST['ville']);
						
			afficherDeuxiemeFormulaire($utilisateur);
			
		}
	}
	else{
		afficherPremierFormulaire();
	}
	
	
	function ajouter($utilisateur){
		
		$utilisateur->setNbachats(0);
		$utilisateur->setNbventes(0);
		$utilisateur->setRole(0);
			
		$utilisateurDAO = new UtilisateurDAO();
			
		$utilisateurDAO->insererUtilisateur($utilisateur);
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
?>