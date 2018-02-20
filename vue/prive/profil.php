<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
?>
<!DOCTYPE html>
<html lang="fr">
	<?php
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateur = $utilisateurDAO->chercherParIdentifiant(1);
	?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Profil de ");echo $utilisateur->getPseudonyme(); ?></title>
	<script type="text/javascript">
		
		function changer_onglet(name){
		
			document.getElementById('onglet_'+onglet_courant).className = "onglet-non-selectionne";
			document.getElementById('contenu_onglet_'+onglet_courant).style.display = 'none';
			document.getElementById('contenu_onglet_'+name).style.display = 'block';
			document.getElementById('onglet_'+name).className = "onglet-selectionne";
			onglet_courant = name;
		}	
		
	</script>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Profil de ");echo $utilisateur->getPseudonyme(); ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
            <li id="page-courante"><?php echo gettext("Page Profil")?></li>
            <li><a href="catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
            <li><a href="achat.php" title="<?php echo gettext("Aller sur la page d'achat")?>"><?php echo gettext("Page d'achat")?></a></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
            <li><a href="creation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
        </ul>
    </nav>
    <div class="onglet-cliquable">
	    <span id="onglet_informations" onclick="javascript:changer_onglet('informations');" ><?php echo gettext("Informations") ?></span>
	    <span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Ventes") ?></span>
	    <span id="onglet_achats" onclick="javascript:changer_onglet('achats');" ><?php echo gettext("Informations") ?></span>
	    <span id="onglet_avis_recus" onclick="javascript:changer_onglet('avis_recus');" ><?php echo gettext("Avis reçus") ?></span>
	    <span id="onglet_avis_donnes" onclick="javascript:changer_onglet('avis_donnes');" ><?php echo gettext("Avis donnés") ?></span>
    </div>
	<div>
		<div class="contenu-onglet" id="contenu_onglet_informations">
			<img src="<?=$utilisateur->getIllustration();?>" id="image-profil" />
			<ul>
				<div class="informations">
					<li> <?php echo gettext("Pseudonyme : "); echo $utilisateur->getPseudonyme(); ?> </li>
					<li> <?php echo gettext("Nom : "); echo $utilisateur->getNom(); ?> </li>
					<li> <?php echo gettext("Prénom : "); echo $utilisateur->getPrenom(); ?> </li>
					<li> <?php echo gettext("Âge : "); echo $utilisateur->getAge(); ?> </li>
				</div>
				<div class="informations">
					<li> <?php echo gettext("Adresse : "); echo $utilisateur->getAdresse(); ?> </li>
					<li> <?php echo gettext("Ville : "); echo $utilisateur->getVille(); ?> </li>
					<li> <?php echo gettext("Code Postal : "); echo $utilisateur->getCodepostal(); ?> </li>
					<li> <?php echo gettext("Pays : "); echo $utilisateur->getPays(); ?> </li>
					<li> <?php echo gettext("E-mail : "); echo $utilisateur->getEmail(); ?> </li>
					<li> <?php echo gettext("Téléphone : "); echo $utilisateur->getTelephone(); ?> </li>
				</div>
			</ul>
			<ul>
				<div class="statistiques">
					<li> <?php echo gettext("Ventes : "); echo $utilisateur->getNbventes(); ?> </li>
					<li> <?php echo gettext("Achats : "); echo $utilisateur->getNbachats(); ?> </li>
				</div>
			</ul>
			<input type="button" value="<?php echo gettext("Modifier vos informations")?>">
		</div>
		<div class="contenu-onglet" id="contenu_onglet_ventes">
			liste des ventes
		</div>
		<div class="contenu-onglet" id="contenu_onglet_achats">
			liste des achats
		</div>
		<div class="contenu-onglet" id="contenu_onglet_avis_recus">
			liste des avis reçus
		</div>
		<div class="contenu-onglet" id="contenu_onglet_avis_donnes">
			liste des avis donnes
		</div>
	</div>
	<script type="text/javascript">
		
		var onglet_courant = 'informations';
		changer_onglet(onglet_courant);
		
	</script>
</body>
</html>