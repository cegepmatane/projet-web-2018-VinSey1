<?php
	
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.staging.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "../detailsObjet.php";

	$categorie = $_REQUEST["categorie"];
	
	$objetDAO = new ObjetDAO();
	$listeObjet = $objetDAO->chercherParCategorie($categorie);
				
	if ( ($listeObjet)){
				
		foreach($listeObjet as $key => $objet) {
			if ($objet->getVedette()!=10){
			
				detailsObjet($objet);
			}				

		}	
	}
	else{
		
		echo "Aucun objet dans la catégorie ".$categorie." !";
	}
	
	
?>