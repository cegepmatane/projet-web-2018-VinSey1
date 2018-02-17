<?php 
	// Création des données test
	$produit1 = new stdClass();
	$produit1->id = 1;
    $produit1->identifiantDeVente = "ez1ezac15hy8j";
    $produit1->identifiantVendeur = "04519875102";
    $produit1->titreDeVente = "Oreiller";
    $produit1->categorie = 3;  // 3 : literie
    $produit1->prix = 20.0;
    $produit1->identifiantMonnaie = 0;  // 0 : dollars
    $produit1->descriptionProduit = "Bonjour, je vends cet oreiller qui ne me sert plus, j'habite
    actuellement au Cégep de Matane";
    $produit1->detailsVente = "Je ne livre pas et je n'envoie pas par la poste, il faudra venir la chercher à Matane au Cégep";
    $produit1->adresse = "616 Avenue du Saint-Rédempteur G4W 1L1 Matane QC Québec";
	$produit1->illustration = "oreiller.png";
	$produit1->nom = "Vincent";

	$profil_courant = new stdClass();
	$profil_courant->nom = "Eliott";
?>

<!DOCTYPE html>
<html lang="fr">
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
        <div id="sous-titre"><?php echo gettext("Vente n°$produit1->id") ?></div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
            <li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
            <li><a href="catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
            <li id="page-courante"><?php echo gettext("Page d'achat")?></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
			<li><a href="creation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
		</ul>
	</nav>	
	<div id="contenu-vente">
		<img id="image-vente" src="illustrations/petit/<?=$produit1->illustration?>"/>
		<ul>
			<div class="informations">
				<li><h4><?php echo gettext("Description")?></h4></li>
				<li><?=$produit1->descriptionProduit?></li>
				<li><h4><?php echo gettext("Détails")?></h4></li>
				<li><?=$produit1->detailsVente?></li>
			</div>
			<div class="prix">
				<li><?=$produit1->prix?> $</li>
		</ul>
		<ul>
			<div class="statistiques-vendeur">
				<li><h4><?php echo gettext("Vendeur :")?></h4><?=$produit1->nom?></li>
				<li><h4><?php echo gettext("Adresse :")?></h4><?=$produit1->adresse?></li>
			</div>
		</ul>
		<input type="button" value="Acheter">
	</div>
</body>
</html>
	

	