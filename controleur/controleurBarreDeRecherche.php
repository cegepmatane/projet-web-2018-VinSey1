<?php

	require_once OBJET_DAO;
	require_once OBJET_MODELE;

if ( isset($_POST['actionFormulaire'])){
	
	$requete = htmlspecialchars($_POST['requete']);
	$objetDAO = new ObjetDAO();
	$resultat = $objetDAO->rechercherObjet($requete);
}	
	
?>