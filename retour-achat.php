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
	<h3>Merci d'avoir acheté l'objet suivant : <?php echo $objet->getTitreDeVente();?></h3>
</body>
</html>
<?php include "piedPage.php"; ?>