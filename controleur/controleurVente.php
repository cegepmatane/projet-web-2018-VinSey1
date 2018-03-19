<?php

	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	$objetDAO = new ObjetDAO();
	$objet = $objetDAO->chercherParIdentifiant(5);

	formulaireAjout($objet);
	
	if ( isset($_POST['actionFormulaire'])){
		
		
		
		$objet->setCategorie($_POST['categorie']);
		$objet->setTitreDeVente($_POST['titreDeVente']);
		$objet->setDescriptionProduit($_POST['descriptionProduit']);
		$objet->setAdresse($_POST['adresse']);
		$objet->setCategorie($_POST['categorie']);
		$objet->setPrix($_POST['prix']);
		$objet->setVedette($_POST['vedette']);
		$objet->setIllustration($_POST['illustration']);
		
		if ($objet->estValide()){
				
			
			
			$objetDAO->insererObjet($objet);
			
			

		} 
	
		
	}
	
	
?>