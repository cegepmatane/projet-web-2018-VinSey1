<?php

	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	

	if ( isset($_POST['actionFormulaire'])){
		echo "salut";
		$requete = $_POST['requete'];
		$objetDAO = new ObjetDAO();
		$resultat = $objetDAO->rechercherObjet($requete);
	
	}	
	
?>