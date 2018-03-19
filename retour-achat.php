<?php 

	include "entete.php";

	require_once OBJET_DAO;
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	require_once OBJET_MODELE;
	require_once ACHAT_UTILISATEUR;

	function afficherMessage($objet){ ?>
	<html>
	<body>
		<h3><?php echo gettext("Merci d'avoir acheté l'objet suivant : ").$objet->getTitreDeVente();?></h3>
		<a href="index.php"><?php echo gettext("Retour à l'accueil");?></a>
	</body>
	</html>
	<?php }
	include "piedPage.php"; ?>