<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
?>
<!DOCTYPE html>
<html lang="fr">
	<?php
		$utilisateurDAO = new UtilisateurDAO();
		
		$idUtilisateur = 1;
		
		if ( isset($_GET['idUtilisateur']) ){
			$idUtilisateur = $_GET['idUtilisateur'];
			
		}		
		
		$utilisateur = $utilisateurDAO->chercherParIdentifiant($idUtilisateur);
	?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Profil de ");echo $utilisateur->getPseudonyme(); ?></title>
	<!--
	<script type="text/javascript">
		
		function changer_onglet(name){
		
			document.getElementById('onglet_'+onglet_courant).className = "onglet-non-selectionne";
			document.getElementById('contenu_onglet_'+onglet_courant).style.display = 'none';
			document.getElementById('contenu_onglet_'+name).style.display = 'block';
			document.getElementById('onglet_'+name).className = "onglet-selectionne";
			onglet_courant = name;
		}	
		
	</script>
	-->
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Profil de ");echo $utilisateur->getPseudonyme(); ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="../../index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
            <li id="page-courante"><?php echo gettext("Page Profil")?></li>
            <li><a href="../../catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
            <li><a href="achat.php" title="<?php echo gettext("Aller sur la page d'achat")?>"><?php echo gettext("Page d'achat")?></a></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
            <li><a href="creation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
        </ul>
    </nav>
	<!--
    <div class="onglet-cliquable">
	    <span id="onglet_informations" onclick="javascript:changer_onglet('informations');" ><?php echo gettext("Informations") ?></span>
	    <span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Ventes") ?></span>
	    <span id="onglet_achats" onclick="javascript:changer_onglet('achats');" ><?php echo gettext("Informations") ?></span>
	    <span id="onglet_avis_recus" onclick="javascript:changer_onglet('avis_recus');" ><?php echo gettext("Avis reçus") ?></span>
	    <span id="onglet_avis_donnes" onclick="javascript:changer_onglet('avis_donnes');" ><?php echo gettext("Avis donnés") ?></span>
    </div>
	-->
	<div>
		<!--<div class="contenu-onglet" id="contenu_onglet_informations">-->
		<img src="<?=$utilisateur->getIllustration();?>" id="image-profil" />
				
		<form action="../../controleur/modifierUtilisateur.php" id="formulaire-modification" method="post">
			<ul>
				<div id = "blocs-formulaire">
					<div id = "bloc-formulaire-1">
						<li>Nom : <input type="text" name="nom" value="<?php echo $utilisateur->getNom(); ?>"/></li>
						<li>Prénom : <input type="text" name="prenom"  value="<?php echo $utilisateur->getPrenom(); ?>"/></li>
						<li>Pseudonyme : <input type="text" name="pseudonyme"  value="<?php echo $utilisateur->getPseudonyme(); ?>"/></li>
						<li>Adresse e-mail : <input type="text" name="email"  value="<?php echo $utilisateur->getEmail(); ?>"/></li>
						<li>Adresse : <input type="text" name="adresse"  value="<?php echo $utilisateur->getAdresse(); ?>"/></li>
					</div>
					<div id = "bloc-formulaire-2">
						<li>Code postal : <input type="text" name="codepostal"  value="<?php echo $utilisateur->getCodepostal(); ?>"/></li>
						<li>Pays : <input type="text" name="pays"  value="<?php echo $utilisateur->getPays(); ?>"/></li>
						<li>Ville : <input type="text" name="ville"  value="<?php echo $utilisateur->getVille(); ?>"/></li>
						<li>Âge : <input type="text" name="anneenaissance"  value="<?php echo $utilisateur->getAge(); ?>"/></li>
						<li>Téléphone : <input type="text" name="telephone"  value="<?php echo $utilisateur->getTelephone(); ?>"/></li>
						<input type="hidden" name="idUtilisateur" value="<?php echo $utilisateur->getIdUtilisateur(); ?>"/>
					</div>
				</div>
				<input id="bouton" type="submit" value="Valider" name="controleur_modification_utilisateur"/>
			</ul>
			
		</form>
		
		<!-- <div class="contenu-onglet" id="contenu_onglet_ventes"> -->
		<div class="contenu-profil">
			liste des ventes
		</div>
		<!-- <div class="contenu-onglet" id="contenu_onglet_achats"> -->
		<div class="contenu-profil">	
			liste des achats
		</div>
		<!-- <div class="contenu-onglet" id="contenu_onglet_avis_recus"> -->
		<div class="contenu-profil">	
			liste des avis reçus
		</div>
		<!-- <div class="contenu-onglet" id="contenu_onglet_avis_donnes"> -->
		<div class="contenu-profil">
			liste des avis donnes
		</div>
	</div>
	<script type="text/javascript">
		
		var onglet_courant = 'informations';
		changer_onglet(onglet_courant);
		
	</script>
</body>
</html>