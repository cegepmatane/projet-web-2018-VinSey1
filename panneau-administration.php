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
	<li><a href="achat.php" title="Aller sur la page Vente">Aller sur la page d'Achat</a></li>
	<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Aller sur la page de vente")?></a></li>

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
                <h4><?php echo gettext("Titre :"); ?> <?=$produitCourant->titreDeVente?></h4>
                <h5>ID : <?=$produitCourant->id?></br></h5>
                <?=$produitCourant->descriptionProduit?>
            </td>
            <td style="text-align: right;">
                <button type="button" style="width: 150px; height: 50px; margin-right: 20px"><?php echo gettext("Modifier la vente"); ?></button>
            </td>
        </tr>
    </table>
<?php } ?>
</div>
</div>
</body>
</html>