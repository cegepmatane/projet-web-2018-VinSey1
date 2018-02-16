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
	<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> <?php echo gettext("Panneau d'administration") ?></title>
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
<body id="general-profil" >
<header>
	<h1 id="titre-profil"> <?php echo gettext("Panneau d'administration") ?></h1>
</header>	
<ul id="navigation">
	<li><a href="catalogue.php" title="Aller sur la page Catalogue"><?php echo gettext("Aller sur la page de catalogue")?></a></li>
	<li><a href="index.php" title="Aller sur la page Accueil"><?php echo gettext("Aller sur la page d'accueil")?></a></li>
	<li><a href="achat.php" title="Aller sur la page Vente"><?php echo gettext("Aller sur la page d'achat")?></a></li>
	<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Aller sur la page de vente")?></a></li>

</ul>
<div class="onglet-cliquable">
    <span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Catalogue des Ventes") ?></span>
    <span id="onglet_utilisateurs" onclick="javascript:changer_onglet('utilisateurs');" ><?php echo gettext("Catalogue des utilisateurs") ?></span>
</div>
<div>

	<div class="contenu-onglet" id="contenu_onglet_ventes">
	
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
					<button type="button"><?php echo gettext("Modifier cette vente");?></button>
				</ul>
			</div>
		<?php } ?>
	</div>

	<div class="contenu-onglet" id="contenu_onglet_utilisateurs">
	
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
					<li><button type="button"><?php echo gettext("Modifier"); ?></button></li>
				</ul>
			</div>
		<?php } ?>	
	</div>
	
</div>
<script type="text/javascript">
	
	var onglet_courant = 'ventes';
	changer_onglet(onglet_courant);
	
</script>
</body>
</html>