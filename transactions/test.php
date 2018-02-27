<?php
	include "../entete.php";
	require_once OBJET_DAO;
	$objetDAO = new ObjetDAO();
		
	$idObjet = 2;
	
	/*
	if ( isset($_GET['idObjet']) ){
		$idObjet = $_GET['idObjet'];	
	}*/

	$objet = $objetDAO->chercherParIdentifiant($idObjet);

	include("fonction_api.php");
	$requete = construit_url_paypal();

	$requete = $requete."&METHOD=SetExpressCheckout".
				"&CANCELURL=".urlencode("cancel.php").
				"&RETURNURL=".urlencode("return.php").
				"&AMT=$objet->getPrix()".
				"&CURRENCYCODE=EUR".
				"&DESC=".urlencode($objet->getDescription()).
				"&LOCALECODE=FR".
				"&HDRIMG=".urlencode($objet->getIllustration());
	echo $requete;
?>