<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">			
	<title> <?php echo gettext("Page d'accueil") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Mettre en vente votre objet") ?> </div>
    </header>	
	<nav>
        <ul>
			<li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
			<li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
			<li><a href="catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
			<li><a href="achat.php" title="<?php echo gettext("Aller sur la page Vente")?>"><?php echo gettext("Page d'Achat")?></a></li>
			<li id="page-courante"><?php echo gettext("Page de vente")?></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
        </ul>
    </nav>
	<form>
		Type de produit<br>
		<select>
			<option value="autre">Autre</option>
			<option value="couverts">Couverts</option>
			<option value="literie">Literie</option>
		</select>
		<br>
		Titre de la vente<br>
		<input type="text"><br>
		Description du produit<br>
		<input type="text"><br>
		Détails<br>
		<input type="text"><br>
		Prix:
		<input type="text"><br>
		Monnaie:
		<select>
			<option value="euro">€</option>
			<option value="dollars">$</option>
			<option value="livre">£</option>
		</select>	
	</form>
	
	
	
	
	
</body>
</html>