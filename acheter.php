<?php 

	include "entete.php";
	include "./transactions/test_stripe.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	require_once UTILISATEUR_DAO;

	$objetDAO = new ObjetDAO();

	$utilisateurDAO = new UtilisateurDAO();

	$idObjet = 1;

	if ( isset($_GET['idObjet']) ){
		$idObjet = $_GET['idObjet'];
	}

	$objet = $objetDAO->chercherParIdentifiant($idObjet);

	$utilisateur = $utilisateurDAO->chercherParIdentifiant($objet->getIdentifiantVendeur());

?>
<html>
<body>
	<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudonyme'])) {
		?>
	<h3><?php echo gettext("Vente"); ?></h3>
	<?php echo $objet->getIllustration(); ?>
	<ul>
		<li><?php echo gettext("Titre de vente : "); echo $objet->getTitreDeVente()?></li>
		<li><?php echo gettext("Description : "); echo $objet->getDescriptionProduit()?></li>
		<li><?php echo gettext("Détails de vente : "); echo $objet->getDetailsVente()?></li>
		<li><?php echo gettext("Adresse : "); echo $objet->getAdresse()?></li>
	</ul>
	<h3><?php echo gettext("Vendeur");?></h3>
	<ul>
		<li><?php echo ($utilisateur->getNom().' "'.$utilisateur->getPseudonyme().'" '.$utilisateur->getPrenom());?></li>
		<li><?php echo ($utilisateur->getAdresse().', '.$utilisateur->getCodePostal().' '.$utilisateur->getVille().', '.$utilisateur->getPays());?></li>
	</ul>
	<?php paiement($objet);
	} else {?>
		<script type='text/javascript'>document.location.replace('connexion.php?idObjet=<?php echo $objet->getIdObjet();?>');</script>
	<?php }?>
</body>
</html>