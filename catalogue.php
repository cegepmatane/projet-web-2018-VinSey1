<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Catalogue") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Catalogue") ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
			<li><a href="vue/prive/profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
			<li id="page-courante"><?php echo gettext("Page Catalogue")?></li>
            <li><a href="vue/prive/achat.php" title="<?php echo gettext("Aller sur la page d'achat")?>"><?php echo gettext("Page d'achat")?></a></li>
			<li><a href="vue/prive/vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
        	<li><a href="vue/prive/panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
			<li><a href="vue/prive/screation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
		</ul>
    </nav>
	<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe">
		<input type="text" name="nato_pf"/>
		<button type="button" name="chercher">Chercher</button>
	</div>
	<div id="contenu-index">
		<ul id="zone-categories-index">
			<div id="categories-index">
				<li id="titre-categories"><h3><?php echo gettext("Catégories"); ?></h3></li>
				<li><?php echo gettext("Catégorie 1"); ?></li>
				<li><?php echo gettext("Catégorie 2"); ?></li>
				<li id="categorie-selectionnee"><?php echo gettext("Catégorie 3"); ?></li>
				<li><?php echo gettext("Catégorie 4"); ?></li>
				<li><?php echo gettext("Catégorie 5"); ?></li>
				<li><?php echo gettext("Catégorie 6"); ?></li>
			</div>
		</ul>
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
			?>
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
						<li><button type="button"><?php echo gettext("Acheter"); ?></button></li>
					</ul>
				</div>
			<?php } ?>
		</div>
		<u id="boutons-index">
			<li><?php echo gettext("Prix")?></li>
			<li><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></button></li>
			<li><?php echo gettext("De 0 à ")?> <span id="demo"></span> $</li>
			<li><button type="button"><?php echo gettext("Se connecter"); ?></button></li>
			<li><button type="button"><?php echo gettext("S'inscrire"); ?></button></li>
		</ul>
	</div>
</body>
<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");
	output.innerHTML = slider.value;
	slider.oninput = function() {
		output.innerHTML = this.value;
	}
</script>
</html>