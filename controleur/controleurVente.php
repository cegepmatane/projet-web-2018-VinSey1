<?php

	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	$objetDAO = new ObjetDAO();
	
	$objet = new Objet();


	formulaireAjout($objet);
	
	if ( isset($_POST['actionFormulaire'])){
		
		$objet->setIdentifiantVendeur($_SESSION['id']);
		$objet->setCategorie($_POST['categorie']);
		$objet->setTitreDeVente($_POST['titreDeVente']);
		$objet->setDescriptionProduit($_POST['descriptionProduit']);
		$objet->setAdresse($_POST['adresse']);
		$objet->setDetailsVente($_POST['details']);
		$objet->setPrix($_POST['prix']);
		$objet->setVedette($_POST['vedette']);
		$objet->setIllustration($_POST['illustration']);
		
		if ($objet->estValide()){
				
			
			
			$objetDAO->insererObjet($objet);
			?> <script type='text/javascript'>document.location.replace('../../acheter.php?idObjet='.$objet->getIdObjet();.'php');</script> <?php
			

		} 
	
		
	}
	
	
?>