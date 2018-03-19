<?php 

	include "entete.php";
	require_once OBJET_DAO;
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	require_once OBJET_MODELE;

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
		}

		?>
	<html>
	<body>
		<h3><?php echo gettext("Merci d'avoir acheté l'objet suivant : ").$objet->getTitreDeVente();?></h3>
		<a href="index.php"><?php echo gettext("Retour à l'accueil");?></a>
	</body>
	</html>
	<?php } else {
		?> <script type='text/javascript'>document.location.replace('index.php');</script> <?php
	}
	include "piedPage.php"; ?>