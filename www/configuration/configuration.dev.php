<?php
define( "UTILISATEUR_DAO", $_SERVER["DOCUMENT_ROOT"]."/www/DAO/UtilisateurDAO.php"   );
define( "UTILISATEUR_MODELE", $_SERVER["DOCUMENT_ROOT"]."/www/modele/Utilisateur.php"   );

define( "OBJET_DAO", $_SERVER["DOCUMENT_ROOT"]."/www/DAO/ObjetDAO.php"   );
define( "OBJET_MODELE", $_SERVER["DOCUMENT_ROOT"]."/www/modele/Objet.php"   );

//---------- BD ---------------------
define("BD_NOM", "survie_etudiante" );
define("BD_HOTE", "localhost" );
define("BD_PORT", "3307" );
define("BD_UTILISATEUR", "root");
define("BD_MDP", "");

require_once($_SERVER["DOCUMENT_ROOT"]."/www/DAO/ConnexionBD.php");

$connexionBD = new ConnexionBD();

$connexionBDActive = $connexionBD->getConnection();




$language = "en_FR";
putenv("LANG=".$language);
setlocale(LC_ALL, $language);
	
$domain = "messages";
bindtextdomain($domain, "Locale");
textdomain($domain);










?>