<?php
    require_once UTILISATEUR_DAO;
    require_once UTILISATEUR_MODELE;

    $objetDAO = new ObjetDAO();

	$utilisateurDAO = new UtilisateurDAO();

    if ( isset($_GET['idObjet']) ){
		$idObjet = $_GET['idObjet'];
	} else {
		?> <script type='text/javascript'>document.location.replace('index.php');</script> <?php
    }
    
    $objet = $objetDAO->chercherParIdentifiant($idObjet);

    if (isset($_SESSION['id']) && isset($_SESSION['pseudonyme'])) { 

		$utilisateur = $utilisateurDAO->chercherParIdentifiant($_SESSION['id']);

		$utilisateur->setNbachats($utilisateur->getNbachats() +1);

		if($utilisateur->estValide()){
            $utilisateurDAO->modifierUtilisateur($utilisateur);
            afficherMessage($objet);
        }
    } else {
        ?> <script type='text/javascript'>document.location.replace('index.php');</script> <?php
    }

