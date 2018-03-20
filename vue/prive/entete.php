<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.staging.php";
	
	session_start();
	
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	
	
	
	switch( $language ){
		
		case "en":
			$language = "en_US.utf8";
			break;

		default:
			$language = "fr_CA.utf8";
			break;
			
	}	
	
	putenv("LANG=".$language);
	setlocale(LC_ALL, $language);
	
	$chemin = $_SERVER["DOCUMENT_ROOT"]."/Locale";
	
	$domain = "messages";
	bindtextdomain($domain, $chemin );
	textdomain($domain);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
	<script src="echarts.js"></script>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">		
	<title><?php echo gettext("Survie étudiante") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Partie Privée") ?> </div>
		<?php 
		if (isset($_SESSION['id']) && isset($_SESSION['pseudonyme'])) {
		?>
		<div id="session"> <?php echo gettext($_SESSION['pseudonyme']) ?>
	<?php } else {
		?> <script type='text/javascript'>document.location.replace('../../index.php');</script> <?php
	} ?>
    </header>	
	<nav>
		<ul>
			<li><a href="../../index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Accueil")?></a></li>
			<li><a href="../../catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Catalogue")?></a></li>
			<li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Profil")?></a></li>
				<?php if ($_SESSION['role'] == 1){  ?>
					<li><a href="administration-utilisateur.php" title="<?php echo gettext("Aller sur la page Administration utilisateur")?>"><?php echo gettext("Administration utilisateur")?></a></li>
					<li><a href="administration-objet.php" title="<?php echo gettext("Aller sur la page Administration Objet")?>"><?php echo gettext("Administration objet")?></a></li>
					<li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur le panneau d'administration")?>"><?php echo gettext("Panneau d'administration")?></a></li>
			<?php } ?>
		</ul> 
	</nav>