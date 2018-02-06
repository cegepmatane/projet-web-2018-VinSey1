<?php 

	$language = "en_FR";
	putenv("LANG=".$language);
	setlocale(LC_ALL, $language);
	
	$domain = "messages";
	bindtextdomain($domain, "Locale");
	textdomain($domain);
	
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
	<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> <?php echo gettext("Vente d'un objet"); ?></title>
</head>
<body id="generalproduit">
<ul id="bouton-profil-courant">
	<li><a href="profil.php"><?php echo gettext("Bonjour"); ?> <?=$profil_courant->nom?></a>
		<ul>
			<li><a href="profil.php"><?php echo gettext("Vos achats"); ?></a></li>
			<li><a href="profil.php"><?php echo gettext("Vos ventes"); ?></a></li>
			<li><a href="profil.php"><?php echo gettext("Modifier vos informations"); ?></a></li>
		</ul>
	</li>
</ul>
<header>
	<h1 id="titre-general"> <?=$produit1->titreDeVente?> <?php echo gettext("à vendre"); ?> </h1>
	<h2 id="titreprofil"><?php echo gettext("Produit de"); ?> <?=$produit1->identifiantVendeur?></h2>
</header>	
<img class="img-vente" src="illustrations/petit/<?=$produit1->illustration?>"/>
<table class="informations">
    <tr>
        <td class="td-info-vente">
            <?php echo gettext("Description"); ?> : <?=$produit1->descriptionProduit?>
        </td>
    </tr>
	<tr>
		<td class="td-info-vente">
			<?php echo gettext("Détail"); ?> : <?=$produit1->detailsVente?>
        </td>
	</tr>
	<tr>
		<td class="td-info-vente">
			 <?php echo gettext("Prix"); ?> : <?=$produit1->prix?>
        </td>
	</tr>
</table>
	<h2 id="titre-vendeur"> <?php echo gettext("Vendeur"); ?> : </h2>
	<p class="td-info-vendeur">
		<?php echo gettext("Nom"); ?> : <?=$produit1->nom?>
	</p>
    <p class="td-info-vendeur">   
		<?php echo gettext("Identifiant vendeur"); ?> : <?=$produit1->identifiantVendeur?>
    </p>
    <p class="td-info-vendeur">
        
          <?php echo gettext("Adresse"); ?> : <?=$produit1->adresse?>
      
    </p>
   <p id="bouton-Achat">
		<input type="button" value="ACHETE ICI !">
	</p>
</body>
</html>
	

	