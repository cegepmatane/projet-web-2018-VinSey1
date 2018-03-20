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

		

		if($utilisateur->estValide()){
			$utilisateur->setNbachats($utilisateur->getNbachats() +1);
            $utilisateurDAO->modifierUtilisateur($utilisateur);
            afficherMessage($objet);
			$objet->setVedette(10);
			$objetDAO->modifierObjet($objet);
        }
    } else {
        ?> <script type='text/javascript'>document.location.replace('index.php');</script> <?php
    }

