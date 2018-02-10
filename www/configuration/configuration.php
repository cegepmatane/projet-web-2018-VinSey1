<?php
define( "UTILISATEUR_DAO", $_SERVER["DOCUMENT_ROOT"]."/DAO/UtilisateurDAO.php"   );
define( "UTILISATEUR_MODELE", $_SERVER["DOCUMENT_ROOT"]."/modele/Utilisateur.php"   );

define( "OBJET_DAO", $_SERVER["DOCUMENT_ROOT"]."/DAO/ObjetDAO.php"   );
define( "OBJET_MODELE", $_SERVER["DOCUMENT_ROOT"]."/modele/Objet.php"   );

//---------- BD ---------------------
define("BD_NOM", "survie_etudiante" );
define("BD_HOTE", "158.69.192.249" );
define("BD_PORT", "22" );
define("BD_UTILISATEUR", "root");
define("BD_MDP", "GUEHJCo4");

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