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
	<title> <?php echo gettext("Création de compte") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Création de compte") ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="../../index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
			<li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
			<li><a href="../../catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
			<li><a href="achat.php" title="<?php echo gettext("Aller sur la page Achat")?>"><?php echo gettext("Page d'achat")?></a></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
			<li><a href="administration-utilisateur.php" title="<?php echo gettext("Administration utilisateur")?>"><?php echo gettext("Aministration utilisateur")?></a></li>
			<li><a href="administration-objet.php" title="Aller sur la page Administration Objet">Administration objet</a></li>
		</ul>
    </nav>
</body>