<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Profil de $profil->pseudonyme") ?></title>
</head>
<body>
	<?php
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateur = $utilisateurDAO->chercherParIdentifiant(1);
	?>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"> <?php echo gettext("Profil de ");echo $utilisateur->getPseudonyme(); ?> </div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
            <li id="page-courante"><?php echo gettext("Page Profil")?></li>
            <li><a href="catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
            <li><a href="vente.php" title="<?php echo gettext("Aller sur la page Vente")?>"><?php echo gettext("Page Vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
        </ul>
    </nav>
    <ul id="onglets-profil">
        <li id="active"><a href="Informations.html"> <?php echo gettext("Informations") ?></a></li>
        <li><a href="Ventes.html"> <?php echo gettext("Ventes") ?></a></li>
        <li><a href="Achats.html"> <?php echo gettext("Achats") ?></a></li>
        <li><a href="Avis_recus.html"> <?php echo gettext("Avis reçus") ?></a></li>
        <li><a href="Avis_donnes.html"> <?php echo gettext("Avis donnés") ?></a></li>
        <li><a href="Modifier.html"> <?php echo gettext("Modifier") ?> </a></li>
    </ul>
    <div id="contenu-profil">
        <img id="image-profil" src="<?php=$utilisateur->getIllustration();?>"/>
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
</body>
</html>