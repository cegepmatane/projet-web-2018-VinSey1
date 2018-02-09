<?php 

    /*
    $language = "fr_FR";
    putenv("LANG=" . $language);
    setlocale(LC_ALL, $language);

    $domain = "messages";
    bindtextdomain($domain,"Locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    
    textdomain($domain);
    */
    
	// Création des données test
	$profil = new stdClass();
	$profil->id = 1;
	$profil->nom = "Baltz";
    $profil->prenom = "Eliott";
    $profil->pseudonyme = "Ace57880";
    $profil->email = "eliott.baltz@gmail.com";
    $profil->adresse = "616 Avenue Saint Rédempteur";
    $profil->codepostal = "G4W 1L1 QC";
    $profil->pays = "Canada";
    $profil->nbachats = "6";
    $profil->nbventes = "54";
    $profil->karma = "100%";
    $profil->illustration = "profil.png";
    $profil->age = "20";
    $profil->ville = "Matane";
    $profil->telephone = "418-562-2609";

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
    $produit1->image = "illustrations/petit/oreiller.png";

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
    $produit2->image = "illustrations/petit/draps.png";
    
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
    $produit3->image = "illustrations/petit/couette.png";
        
        
    $tableauProduits = [$produit1, $produit2, $produit3];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> <?php echo gettext("Panneau d'administration") ?></title>
</head>
<body id="general-profil">
<header>
	<h1 id="titre-profil"> <?php echo gettext("Panneau d'administration") ?></h1>
</header>	
<ul id="navigation">
	<li><a href="catalogue.php" title="Aller sur la page Catalogue">Aller sur la page Catalogue</a></li>
	<li><a href="index.php" title="Aller sur la page Accueil">Aller sur la page Accueil</a></li>
	<li><a href="vente.php" title="Aller sur la page Vente">Aller sur la page Vente</a></li>
</ul>
<ul id="onglets-profil">
    <li class="active"><a href="gestion-vente.html"> <?php echo gettext("Catalogue des Ventes") ?></a></li>
    <li><a href="gestion-utilisateurs.html"> <?php echo gettext("Catalogue des utilisateurs") ?></a></li>
</ul>
<div id="contenu-profil">
<?php foreach($tableauProduits as $produitCourant){ ?>		
	<table style="border: 1px solid black; margin: auto; width: 1450px; text-align: center;">
		<tr>
			<td>
                <img src="<?=$produitCourant->image?>" class="photo-miniature-produit"/>
            </td>
            <td>
                <h4>Titre : <?=$produitCourant->titreDeVente?></h4>
                <h5>ID : <?=$produitCourant->id?></br></h5>
                <?=$produitCourant->descriptionProduit?>
            </td>
            <td style="text-align: right;">
                <button type="button" style="width: 150px; height: 50px; margin-right: 20px">Modifier la vente</button>
            </td>
        </tr>
    </table>
<?php } ?>
</div>
</div>
</body>
</html>