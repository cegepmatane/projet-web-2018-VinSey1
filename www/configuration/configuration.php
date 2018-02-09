<?php
define( "UTILISATEUR_DAO", $_SERVER["DOCUMENT_ROOT"]."/DAO/UtilisateurDAO.php"   );
define( "UTILISATEUR_MODELE", $_SERVER["DOCUMENT_ROOT"]."/modele/Utilisateur.php"   );

//---------- BD ---------------------
define("BD_NOM", "survie_etudiante" );
define("BD_HOTE", "localhost" );
define("BD_PORT", "3307" );
define("BD_UTILISATEUR", "root");
define("BD_MDP", "");

require_once($_SERVER["DOCUMENT_ROOT"]."/DAO/ConnexionBD.php");

$connexionBD = new ConnexionBD();

$connexionBDActive = $connexionBD->getConnection();




$language = "en_FR";
putenv("LANG=".$language);
setlocale(LC_ALL, $language);
	
$domain = "messages";
bindtextdomain($domain, "Locale");
textdomain($domain);










?>