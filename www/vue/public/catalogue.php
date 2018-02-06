<?php
    // Données test
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

    $produit2 = new stdClass();
	$produit2->id = 2;
    $produit2->identifiantDeVente = "wr54u8ix1v18r9";
    $produit2->identifiantVendeur = "04524803548";
    $produit2->titreDeVente = "Draps";
    $produit2->categorie = 3;  // 3 : literie
    $produit2->prix = 12.0;
    $produit2->identifiantMonnaie = 0;  // 0 : dollarss
    $produit2->descriptionProduit = "Bonjour, je vends cet ensemble de draps, ils sont en parfait état";
    $produit2->detailsVente = "Je peux vous les apporter si vous habitez à québec, sinon il va falloir aller les chercher vous-même";
	$produit2->illustration = "draps.png";

    $produit3 = new stdClass();
	$produit3->id = 3;
    $produit3->identifiantDeVente = "d2j8e62g1j7y9s";
    $produit3->identifiantVendeur = "045215249";
    $produit3->titreDeVente = "Couette";
    $produit3->categorie = 3;  // 3 : literie
    $produit3->prix = 8.0;
    $produit3->identifiantMonnaie = 0;  // 0 : dollarss
    $produit3->descriptionProduit = "Vends couette, taille 1.5m * 0.7m";
    $produit3->detailsVente = "Je ne peux pas livrer il va falloir venir les chercher chez moi, j'habite à Montréal";
	$produit3->illustration = "couette.png";
	
	
	$listeProduits = [$produit1, $produit2, $produit3];

?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Catalogue</title>
	<link rel="stylesheet" type="text/css" href="decoration/style_general.css">	
	<style>
	
		#liste-produit
		{
			padding:1rem; 
		}
		
		#liste-produit .fiche-produit
		{
			border-radius:1rem;
			height:20rem;
			width:30rem;
			
		}
		#liste-produit .fiche-produit h3
		{
			clear:both;
			width:98%;
			background-color:blue;
			color:white;
			padding:0.2rem;
		}
		#liste-produit .fiche-produit .illustration
		{
			float:left;	
			margin-right:1rem;
			height:100%;
			margin-top:0.5rem;
			
		}	
		#liste-produit .fiche-produit p,
		#liste-produit .fiche-produit ul
		{
			float:left;	
			display:block;
			max-width:20rem;
			line-height:20px;
			
		}	
		#liste-produit .fiche-produit ul
		{
			float:left;
			margin-top:0.5rem;
			margin-bottom:0.5rem;
			list-style-type:none;
		}
		#liste-produit .fiche-produit li
		{
			clear:both;
		}
	</style>
</head>
<body>
	<header>
		<h1>Les articles en vente</h1>
		<nav id="navigation-menu">
		</nav>
	</header>
	
	<ul id="navigation">
		<li><a href="profil.php" title="Aller sur la page Profil">Aller sur la page Profil</a></li>
		<li><a href="index.php" title="Aller sur la page Accueil">Aller sur la page Accueil</a></li>
		<li><a href="vente.php" title="Aller sur la page Vente">Aller sur la page Vente</a></li>
	</ul>

	<section id="contenu">
		<header><h2>Liste des produits</h2></header>
		<div id="liste-produit">
		<?php 
		foreach($listeProduits as $produit)
		{
		?>
			<div class="fiche fiche-produit" id="fiche-produit-<?=$produit->id?>">
				<h3><?=$produit->titreDeVente?></h3>
				<div class="illustration"><img src="illustrations/petit/<?=$produit->illustration?>"/></div>
				<ul class="caracteristiques">
				<li><span class="type"><label>Titre de vente : </label><?=$produit->titreDeVente?></span></li>
				<li><span class="generation"><label>Prix: </label><?=$produit->prix?></span></li>
				<li><span class="type"><label>Description : </label><?=$produit->descriptionProduit?></span></li>
				<li><span class="generation"><label>Details : </label><?=$produit->detailsVente?></span></li>
				</ul>
				
				
			</div>
		
		<?php
		}
		?>
		</div>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>