<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;

	$utilisateur = new Utilisateur();
	
	
	afficherPremierFormulaire();
	
	
	if ( isset($_POST['deuxiemeFormulaire'])){
		
		afficherDeuxiemeFormulaire($utilisateur);
	}
	
	if ( isset($_POST['troisiemeFormulaire'])){
		
		afficherDeuxiemeFormulaire($utilisateur);
	}
	
	if ( isset($_POST['validation'])){
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>