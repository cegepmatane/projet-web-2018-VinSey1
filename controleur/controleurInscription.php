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
				
				afficherPremierFormulaire($utilisateur);
				
			}
			
			
		}
		
		
		
	}
	else{
		afficherPremierFormulaire();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>