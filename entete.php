<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.staging.php";
	
	/**$language = "en_US.utf8";
	putenv("LANG=".$language);
	setlocale(LC_MESSAGES, $language);
	
	$chemin = $_SERVER["DOCUMENT_ROOT"]."/Locale";
	
	$domain = "messages";
	bindtextdomain($domain, $chemin );
	textdomain($domain);
	*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">		
	<title><?php echo gettext("Survie étudiante") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Partie Publique") ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Accueil")?></a></li>
            <li><a href="catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Catalogue")?></a></li>
			<li><a href="vue/prive/administration-utilisateur.php" title="<?php echo gettext("Aller sur la page Administration utilisateur")?>"><?php echo gettext("Administration utilisateur")?></a></li>
			<li><a href="vue/prive/administration-objet.php" title="<?php echo gettext("Aller sur la page Administration Objet")?>"><?php echo gettext("Administration objet")?></a></li>
			<li><a href="vue/prive/panneau-administration.php" title="<?php echo gettext("Aller sur le panneau d'administration")?>"><?php echo gettext("Panneau d'administration")?></a></li>
		</ul>
    </nav>
