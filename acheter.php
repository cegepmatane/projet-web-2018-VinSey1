<?php 

	include "entete.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	$objetDAO = new ObjetDAO();

	$idObjet = 1;

	if ( isset($_GET['idObjet']) ){
		$idObjet = $_GET['idObjet'];
	}

	$objet = $objetDAO->chercherParIdentifiant($idObjet);

?>
<html>
<body>
	<ul>
		<li><?php echo gettext("Titre de vente : "); echo $objet->getTitreDeVente()?></li>
		<li><?php echo gettext("Description : "); echo $objet->getDescriptionProduit()?></li>
		<li><?php echo gettext("Détails de vente : "); echo $objet->getDetailsVente()?></li>
	</ul>
</body>
</html>
<?php include "piedPage.php"; ?>