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
</head>
<body id="general-profil">
<header>
	<h1 id="titre-profil"> <?php echo gettext("Panneau d'administration") ?></h1>
</header>	
<ul id="navigation">
	<li><a href="catalogue.php" title="Aller sur la page Catalogue"><?php echo gettext("Aller sur la page de catalogue")?></a></li>
	<li><a href="index.php" title="Aller sur la page Accueil"><?php echo gettext("Aller sur la page d'accueil")?></a></li>
	<li><a href="achat.php" title="Aller sur la page Vente"><?php echo gettext("Aller sur la page d'achat")?></a></li>
	<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Aller sur la page de vente")?></a></li>

</ul>
<ul id="onglets-profil">
    <li class="active"><a href="gestion-vente.html"> <?php echo gettext("Catalogue des Ventes") ?></a></li>
    <li><a href="gestion-utilisateurs.html"> <?php echo gettext("Catalogue des utilisateurs") ?></a></li>
</ul>
<div id="contenu-profil" id="contenu_onglet_utilisateurs">
<?php 
	$objetDAO = new ObjetDAO();
	$listeobjet = $objetDAO->obtenirListeObjet();
 ?>
<?php foreach($listeobjet as $key => $objet) { ?>		
	<table style="border: 1px solid black; margin: auto; width: 1450px; text-align: center;">
		<tr>
			<td>
                <img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
            </td>
            <td>
                <h4><?php echo gettext("Titre :"); ?> <?=$objet->getTitreDeVente();?></h4>
                <h5>ID : <?=$objet->getIdObjet();?></br></h5>
                <?=$objet->getDescriptionProduit();?>
            </td>
            <td style="text-align: right;">
                <button type="button" style="width: 150px; height: 50px; margin-right: 20px"><?php echo gettext("Modifier la vente"); ?></button>
            </td>
        </tr>
    </table>
<?php } ?>

<div id="contenu-profil" id="contenu_onglet_utilisateurs">
	
</div>
</body>
</html>