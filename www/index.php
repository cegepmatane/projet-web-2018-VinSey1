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
	<title> <?php echo gettext("Page d'accueil") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Page d'accueil") ?> </div>
    </header>	
    <nav>
        <ul>
			<li id="page-courante">Page d'Accueil</li>
            <li><a href="profil.php" title="Aller sur la page Profil">Page Profil</a></li>
			<li><a href="catalogue.php" title="Aller sur la page Catalogue">Page Catalogue</a></li>
            <li><a href="vente.php" title="Aller sur la page Vente">Page Vente</a></li>
			<li><a href="panneau-administration.php" title="Aller sur la page Panneau d'administration">Page Panneau d'administration</a></li>
        </ul>
    </nav>
	<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe">
		<input type="text" name="nato_pf"/>
	</div>
	<div id="contenu-index">
		<ul id="zone-categories-index">
			<div id="categories-index">
				<li id="titre-categories"><h3><?php echo gettext("Catégories"); ?></h3></li>
				<li><?php echo gettext("Catégorie 1"); ?></li>
				<li><?php echo gettext("Catégorie 2"); ?></li>
				<li><?php echo gettext("Catégorie 3"); ?></li>
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
					if ($objet->getVedette() == 1) {
						
					
			?>
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?></li>
						<li><button type="button"><?php echo gettext("Acheter"); ?></button></li>
					</ul>
				</div>
			<?php }} ?>
		</div>
		<u id="boutons-index">
			<li><button type="button"><?php echo gettext("Vendre un objet"); ?></button></li>
			<li><button type="button"><?php echo gettext("Se connecter"); ?></button></li>
			<li><button type="button"><?php echo gettext("S'inscrire"); ?></button></li>
		</ul>
</body>
</html>