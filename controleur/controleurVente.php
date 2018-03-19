<?php

	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	
	if ( isset($_POST['actionFormulaire'])){
		
		$objet = new Objet();
		
		$objet->setCategorie($_POST['categorie']);
		
		
		
	}
	
	
?>