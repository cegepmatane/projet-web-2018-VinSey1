<?php 
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;	
?>

<!DOCTYPE html>
<html lang="fr">
	<?php
		$objetDAO = new ObjetDAO();
		$objet = $objetDAO->chercherParIdentifiant(1);
	?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Vente n°$produit1->id") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Vente n°"); echo $objet->getIdentifiantDeVente(); ?></div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
            <li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
            <li><a href="catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
            <li id="page-courante"><?php echo gettext("Page d'Achat")?></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
        </ul>
	</nav>	
	<div id="contenu-vente">
		<img id="image-vente" src="<?=$objet->getIllustration();?>"/>
		<ul>
			<div class="informations">
				<li><h4><?php echo gettext("Description")?></h4></li>
				<li><?php echo $objet->getDescriptionProduit();?></li>
				<li><h4><?php echo gettext("Détails")?></h4></li>
				<li><?php echo $objet->getDetailsVente();?></li>
			</div>
			<div class="prix">
				<li><?php echo $objet->getPrix();?> $</li>
		</ul>
		<ul>
			<div class="statistiques-vendeur">
				<li><h4><?php echo gettext("Vendeur :")?></h4><?php echo $objet->getIdentifiantVendeur();?></li>
				<li><h4><?php echo gettext("Adresse :")?></h4><?php echo $objet->getAdresse();?></li>
			</div>
		</ul>
		<input type="button" value="Acheter">
	</div>
</body>
</html>
	

	