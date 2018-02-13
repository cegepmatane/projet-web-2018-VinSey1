<?php
	/*require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;*/



	// Données test
	$produit1 = new stdClass();
	$produit1->identifiantDeVente = "ez1ezac15hy8j";
	$produit1->identifiantVendeur = 4519875102;
	$produit1->titreDeVente = "Casserole en metal";
	$produit1->categorie = 0;  // 0 : Ustensiles de cuisine
	$produit1->prix = 20.0;
	$produit1->identifiantMonnaie = 0;  // 0 : dollars
	$produit1->descriptionProduit = "Bonjour, je vends cette casserole qui ne me sert plus, j'habite
	actuellement au Cégep de Matane";
	$produit1->detailsVente = "Je ne livre pas et je n'envoie pas par la poste, il faudra venir la chercher à Matane au Cégep";
	$produit1->adresse = "616 Avenue du Saint-Rédempteur G4W 1L1 Matane QC Québec";
	$produit1->image = "illustrations/tests/casserole.jpg";
	
	$produit2 = new stdClass();
	$produit2->identifiantDeVente = "wr54u8ix1v18r9";
	$produit2->identifiantVendeur = 4524803548;
	$produit2->titreDeVente = "Ensemble de couverts";
	$produit2->categorie = 0;  // 0 : ustensiles de cuisine
	$produit2->prix = 12.0;
	$produit2->identifiantMonnaie = 0;  // 0 : dollarss
	$produit2->descriptionProduit = "Bonjour, je vends cet ensemble de couverts, ils sont en parfait état";
	$produit2->detailsVente = "Je peux vous les apporter si vous habitez à québec, sinon il va falloira aller les chercher vous-même";
	$produit2->image = "illustrations/tests/couverts.jpg";
	
	$produit3 = new stdClass();
	$produit3->identifiantDeVente = "d2j8e62g1j7y9s";
	$produit3->identifiantVendeur = 45215249;
	$produit3->titreDeVente = "Vend serviette de bain";
	$produit3->categorie = 1;  // 1 : Hygiène
	$produit3->prix = 8.0;
	$produit3->identifiantMonnaie = 0;  // 0 : dollarss
	$produit3->descriptionProduit = "Vends serviette, taille 1.5m * 0.7m";
	$produit3->detailsVente = "Je ne peux pas livrer il va falloir venir les chercher chez moi, j'habite à Montréal";
	$produit3->image = "illustrations/tests/serviette.jpg";
	
	
	$tableauProduit = array(
		$produit1,
		$produit2,
		$produit3,
	);
	
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel = "stylesheet" href = "./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Page d'accueil") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Page d'accueil") ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="catalogue.php" title="Aller sur la page Catalogue">Aller sur la page Catalogue</a></li>
            <li><a href="index.php" title="Aller sur la page Accueil">Aller sur la page Accueil</a></li>
            <li><a href="vente.php" title="Aller sur la page Vente">Aller sur la page Vente</a></li>
        </ul>
    </nav>
	<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe">
		<input type="text" name="nato_pf"/>
	</div>
	<div id="contenu-index">
		<ul id="zone-categories-index">
			<div id="categories-index">
				<li id="titre-categories"><h3><?php echo gettext("Catégories"); ?></h3></li>
				<li><?php echo gettext("Catégorie 1"); ?></li>
				<li><?php echo gettext("Catégorie 2"); ?></li>
				<li><?php echo gettext("Catégorie 3"); ?></li>
				<li><?php echo gettext("Catégorie 4"); ?></li>
				<li><?php echo gettext("Catégorie 5"); ?></li>
				<li><?php echo gettext("Catégorie 6"); ?></li>
			</div>
		</ul>
		<div id="ensemble-produits">
			<?php foreach($tableauProduit as $produitCourant) { ?>
				<div class="produit-courant">
					<img src="<?=$produitCourant->image?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $produitCourant->titreDeVente;?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $produitCourant->prix;?></li>
						<li><button type="button"><?php echo gettext("Acheter"); ?></button></li>
					</ul>
				</div>
			<?php } ?>
		</div>
		<u id="boutons-index">
			<li><button type="button"><?php echo gettext("Vendre un objet"); ?></button></li>
			<li><button type="button"><?php echo gettext("Se connecter"); ?></button></li>
			<li><button type="button"><?php echo gettext("S'inscrire"); ?></button></li>
		</ul>
</body>
</html>