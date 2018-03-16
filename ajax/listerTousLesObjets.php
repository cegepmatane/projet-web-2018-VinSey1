<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.staging.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "../detailsObjet.php";

	$objetDAO = new ObjetDAO();
	$listeObjet = $objetDAO->obtenirListeObjet();
	foreach($listeObjet as $key => $objet) {
		detailsObjet($objet);
	} ?>