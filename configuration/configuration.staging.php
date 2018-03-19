<?php
define( "UTILISATEUR_DAO", $_SERVER["DOCUMENT_ROOT"]."/DAO/UtilisateurDAO.php"   );
define( "UTILISATEUR_MODELE", $_SERVER["DOCUMENT_ROOT"]."/modele/Utilisateur.php"   );
define( "UTILISATEUR_CONTROLEUR", $_SERVER["DOCUMENT_ROOT"]."/controleur/controleurUtilisateur.php" );
define( "MODIFICATION_PROFIL_CONTROLEUR", $_SERVER["DOCUMENT_ROOT"]."/controleur/controleurProfil.php" );

define( "OBJET_DAO", $_SERVER["DOCUMENT_ROOT"]."/DAO/ObjetDAO.php"   );
define( "OBJET_MODELE", $_SERVER["DOCUMENT_ROOT"]."/modele/Objet.php"   );
define( "OBJET_CONTROLEUR", $_SERVER["DOCUMENT_ROOT"]."/controleur/controleurObjet.php" );
define( "CREATION_VENTE_CONTROLEUR", $_SERVER["DOCUMENT_ROOT"]."/controleur/controleurVente.php" );


define( "LISTE_ERREUR_FORMULAIRE", $_SERVER["DOCUMENT_ROOT"]."/listeErreurFormulaire.php" );

define( "FILTRES", $_SERVER["DOCUMENT_ROOT"]."/modele/filtres.php" );
define("INSCRIPTION_UTILISATEUR_CONTROLEUR",$_SERVER["DOCUMENT_ROOT"]."/controleur/controleurInscription.php" );
define("CONNEXION_UTILISATEUR_CONTROLEUR",$_SERVER["DOCUMENT_ROOT"]."/controleur/controleurConnexion.php" );
define("DECONNEXION_UTILISATEUR_CONTROLEUR",$_SERVER["DOCUMENT_ROOT"]."/controleur/controleurDeconnexion.php" );
define("RECHERCHE_UTILISATEUR_CONTROLEUR",$_SERVER["DOCUMENT_ROOT"]."/controleur/controleurBarreDeRecherche.php" );
//---------- BD ---------------------
define("BD_NOM", "survie_etudiante" );
define("BD_HOTE", "localhost" );
define("BD_PORT", "3307" );
define("BD_UTILISATEUR", "projetweb");
define("BD_MDP", "ProWeb");

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