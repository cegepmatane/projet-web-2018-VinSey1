<?php 
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;
?>

<!DOCTYPE html>
<html lang="fr">
	<?php
		$objetDAO = new ObjetDAO();
		
		$idObjet = 1;
		
		if ( isset($_GET['idObjet']) ){
			$idObjet = $_GET['idObjet'];
			
		}

		$objet = $objetDAO->chercherParIdentifiant($idObjet);
	?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">	
	<title> <?php echo gettext("Vente n°"); echo $objet->getIdObjet(); ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Vente n°"); echo $objet->getIdObjet(); ?></div>
    </header>	
    <nav>
        <ul>
		<?php
		/*
			$test = $_SERVER["DOCUMENT_ROOT"]."index.php";
			<li><a href="<?= $_SERVER["DOCUMENT_ROOT"]."/index.php" ?>" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>

			*/
		?>
            <li><a href="../../index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
            <li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
            <li><a href="../../catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
            <li id="page-courante"><?php echo gettext("Page d'achat")?></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
			<li><a href="creation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
		</ul>
	</nav>	
	<form action="../../controleur/mettreEnVente.php" id="formulaire-vente" method="post">
		<ul>
			<li><?php echo gettext("Type de produit :")?>
				<select>
					<option selected value="<?php echo $objet->getCategorie();?>"><?php echo $objet->getCategorie();?></option>
						<?php if( $objet->getCategorie() == "Autre"){ ?>
							<option value="couverts"><?php echo gettext("Couverts")?></option>
							<option value="literie"><?php echo gettext("Literie")?></option>
						<?php } ?>
						<?php if( $objet->getCategorie() == "Couverts"){ ?>
							<option value="couverts"><?php echo gettext("Autre")?></option>
							<option value="literie"><?php echo gettext("Literie")?></option>
						<?php } ?>
						<?php if( $objet->getCategorie() == "Literie"){ ?>
							<option value="couverts"><?php echo gettext("Autre")?></option>
							<option value="literie"><?php echo gettext("Couverts")?></option>
						<?php } ?>
				</select>
			</li>
			<li><?php echo gettext("Titre de la vente : ")?></li>
			<li><input type="text" name="titreDeVente" size="50" value="<?php echo $objet->getTitreDeVente(); ?>" /></li>
			<li><?php echo gettext("Description du produit : ")?></li>
			<li><input type="text" name="descriptionProduit" size="50" id="gros-texte" value="<?php echo $objet->getDescriptionProduit(); ?>" /></li>
			<li><?php echo gettext("Détails : ")?></li>
			<li><input type="text" name="details" size="50" id="gros-texte" value="<?php echo $objet->getDetailsVente(); ?>" /></li>
			<li><?php echo gettext("Adresse : ")?></li>
			<li><input type="text" name="adresse" size="50" id="gros-texte" value="<?php echo $objet->getAdresse(); ?>"/></li>
			<li>
				<?php echo gettext("Prix : ")?> <input type="text" name="prix" size="1" value="<?php echo $objet->getPrix(); ?>"/>
				<select >
					<option value="euro">€</option>
					<option value="dollars">$</option>
					<option value="livre">£</option>
				</select>	
			</li>
			<li>
				<?php if ( $objet->getVedette() == 1){ ?>
					<?php echo gettext("Mettre en vedette ?") ?> <input checked type="radio" name="vedette" value="1"> Oui <input type="radio" name="vedette" value="0"> Non
				<?php } ?>
				<?php if ( $objet->getVedette() == 0){ ?>
					<?php echo gettext("Mettre en vedette ?") ?> <input type="radio" name="vedette" value="1"> Oui <input checked type="radio" name="vedette" value="0"> Non
				<?php } ?>
			</li>
		</ul>
		<input id="bouton" type="submit" value="Valider" name="controleur_vente"/>
	</form>
</body>
</html>
</html>