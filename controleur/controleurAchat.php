<?php

	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	
	if(isset ($_POST["idObjet"] ) ){
		
		$idObjet = $_POST['idObjet'];
		
		$objetDAO = new ObjetDAO();
		
		$objet = $objetDAO->chercherParIdentifiant($idObjet);
		
		afficherDetailObjet($objet);
		
		
	}



?>