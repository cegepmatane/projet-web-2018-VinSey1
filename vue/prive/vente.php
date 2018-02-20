<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Création d'une vente") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Création d'une vente") ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="../../index.php" title="Aller sur la page d'Accueil">Page d'Accueil</a></li>
            <li><a href="profil.php" title="Aller sur la page Profil">Page Profil</a></li>
            <li><a href="../../catalogue.php" title="Aller sur la page Catalogue">Page Catalogue</a></li>
            <li><a href="achat.php" title="Aller sur la page d'achat">Page d'achat</a></li>
			<li id="page-courante">Page de vente</li>
			<li><a href="panneau-administration.php" title="Aller sur la page Panneau d'administration">Page Panneau d'administration</a></li>
			<li><a href="creation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
        </ul>
    </nav>
	<form action="../../controleur/mettreEnVente.php" id="formulaire-vente">
		<ul>
			<li><?php echo gettext("Type de produit :")?>
				<select>
					<option value="autre"><?php echo gettext("Autre")?></option>
					<option value="couverts"><?php echo gettext("Couverts")?></option>
					<option value="literie"><?php echo gettext("Literie")?></option>
				</select>
			</li>
			<li><?php echo gettext("Titre de la vente : ")?></li>
			<li><input type="text" name="titreDeVente" size="50" /></li>
			<li><?php echo gettext("Description du produit : ")?></li>
			<li><input type="text" name="descriptionProduit" size="50" id="gros-texte"/></li>
			<li><?php echo gettext("Détails : ")?></li>
			<li><input type="text" name="details" size="50" id="gros-texte"/></li>
			<li><?php echo gettext("Adresse : ")?></li>
			<li><input type="text" name="adresse" size="50" id="gros-texte"/></li>
			<li>
				<?php echo gettext("Prix : ")?> <input type="text" name="prix" size="1"/>
				<select >
					<option value="euro">€</option>
					<option value="dollars">$</option>
					<option value="livre">£</option>
				</select>	
			</li>
		</ul>
		<input id="bouton" type="submit" value="Valider" name="controleur_vente"/>
	</form>
</body>
</html>