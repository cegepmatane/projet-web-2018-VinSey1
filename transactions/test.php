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

	$prix = $objet->getPrix();
	$requete = $requete."&METHOD=SetExpressCheckout".
				"&CANCELURL=".urlencode("cancel.php").
				"&RETURNURL=".urlencode("return.php").
				"&AMT=$prix".
				"&CURRENCYCODE=EUR".
				"&DESC=".urlencode($objet->getDescriptionProduit()).
				"&LOCALECODE=FR".
				"&HDRIMG=".urlencode($objet->getIllustration());
	
	$ch = curl_init($requete);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	if (curl_exec($ch))
	{echo "<p>OK !</p>";}
	else
	{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
	curl_close($ch);
?>