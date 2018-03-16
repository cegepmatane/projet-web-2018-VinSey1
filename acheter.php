<?php 

	include "entete.php";

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
	<h3>Vente</h3>
	<?php echo $objet->getIllustration(); ?>
	<ul>
		<li><?php echo gettext("Titre de vente : "); echo $objet->getTitreDeVente()?></li>
		<li><?php echo gettext("Description : "); echo $objet->getDescriptionProduit()?></li>
		<li><?php echo gettext("Détails de vente : "); echo $objet->getDetailsVente()?></li>
		<li><?php echo gettext("Adresse : "); echo $objet->getAdresse()?></li>
	</ul>
	<h3>Vendeur</h3>
	<ul>
		<li><?php echo ($utilisateur->getNom()+' "'+$utilisateur->getPseudonyme()+'" '+$utilisateur->getPrenom())?></li>
		<li><?php echo ($utilisateur->getAdresse()+' '+$utilisateur->getPrenom())?></li>
	</ul>
</body>
</html>
<?php include "piedPage.php"; ?>