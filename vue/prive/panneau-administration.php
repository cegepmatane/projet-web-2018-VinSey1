<?php 
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
    /*
    $language = "fr_FR";
    putenv("LANG=" . $language);
    setlocale(LC_ALL, $language);

    $domain = "messages";
    bindtextdomain($domain,"Locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    
    textdomain($domain);
    */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">		
	<title><?php echo gettext("Panneau d'administration") ?></title>
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
        <div id="sous-titre"> <?php echo gettext("Panneau d'administration") ?> </div>
	</header>	
		<nav>
			<ul>
				<li><a href="../../index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
				<li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
				<li><a href="../../catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
				<li><a href="achat.php" title="<?php echo gettext("Aller sur la page d'achat")?>"><?php echo gettext("Page d'achat")?></a></li>
				<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
				<li id="page-courante"><?php echo gettext("Page Panneau d'administration")?></li>
				<li><a href="creation-compte.php" title="Aller sur la page Création de compte">Page Création de compte</a></li>
			</ul>
		</nav>
	<div class="onglet-cliquable">
		<span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Catalogue des Ventes") ?></span>
		<span id="onglet_utilisateurs" onclick="javascript:changer_onglet('utilisateurs');" ><?php echo gettext("Catalogue des utilisateurs") ?></span>
	</div>
	<div>
		<div class="onglets-profil" id="contenu_onglet_ventes">
			
				<?php echo gettext("Chercher des ventes");?></br>
				<?php echo gettext("Identifiant de la vente");?> <input type="text" ></br>
				<?php echo gettext("Identifiant du vendeur");?> <input type="text" ></br>
				<?php echo gettext("Titre de vente");?> <input type="text" ></br>
				<button type="button"><?php echo gettext("Chercher");?></button>
						
			<?php 
			$objetDAO = new ObjetDAO();
			$listeobjet = $objetDAO->obtenirListeObjet();
			?>
			<?php foreach($listeobjet as $key => $objet) { ?>		
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
						<li><a href="achat.php?idObjet=<?php echo $objet->getIdObjet(); ?>"> Modifier </a></li>
					</ul>
				</div>
			<?php } ?>
		</div>

		<div class="contenu-onglet" id="contenu_onglet_utilisateurs">
		
			<?php echo gettext("Chercher des utilisateurs");?></br>
				<?php echo gettext("Identifiant");?> <input type="text" ></br>
				<?php echo gettext("Nom");?> <input type="text" ></br>
				<?php echo gettext("Prenom");?> <input type="text" ></br>
				<?php echo gettext("Adresse mail");?> <input type="text" ></br>
				<button type="button"><?php echo gettext("Chercher");?></button>
				<button type="button"><?php echo gettext("Créer un utilisateur");?></button>
		
			<?php 
			$utilisateurDAO = new UtilisateurDAO();
			$listeutilisateur = $utilisateurDAO->obtenirListeUtilisateur();
			?>
			<?php foreach($listeutilisateur as $key => $objet) { ?>
				<div class="produit-courant">
					<ul>
						<li><?php echo gettext("Nom");?>: <?php echo $objet->getNom();?></li>
						<li><?php echo gettext("Prenom");?>: <?php echo $objet->getPrenom();?></li>
						<li><?php echo gettext("Pseudo");?>: <?php echo $objet->getPseudonyme();?></li>
						<li><a href="profil.php?idUtilisateur=<?php echo $objet->getidUtilisateur(); ?>"> Modifier </a></li>
						<li><a href="profil.php?idUtilisateur=<?php echo $objet->getidUtilisateur(); ?>"> Supprimer </a></li> 
					</ul>
				</div>
			<?php } ?>	
		</div>
		
	</div>
	<script type="text/javascript">
		console.log("hello");
		var onglet_courant = 'ventes';
		changer_onglet(onglet_courant);
		
	</script>
</body>
</html>