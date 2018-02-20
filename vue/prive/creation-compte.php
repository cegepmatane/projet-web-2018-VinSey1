<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/controleur/inscription.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../../decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">		
	<title> <?php echo gettext("Création de compte") ?></title>
</head>
<body>
    <header>
        <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Création de compte") ?> </div>
		
		<?php
		
		$utilisateur = new Utilisateur(0, 
									   "cqcf",
									   "crqcfqe",
									   "xfeqsfe",
									   "eqcfe334",
									   "3DExdz",
									   "cfrscfqr",
									   "cgrsgvr",
									   "gvtsrg",
									   0, 
									   0,
									   "image",
									   56,
									   "grqcgq",
									   0
									   );
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->insererUtilisateur($utilisateur);
		
		
		?>
		
		
    </header>	
    <nav>
        <ul>
            <li><a href="../../index.php" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Page d'Accueil")?></a></li>
			<li><a href="profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Page Profil")?></a></li>
			<li><a href="../../catalogue.php" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Page Catalogue")?></a></li>
			<li><a href="achat.php" title="<?php echo gettext("Aller sur la page Achat")?>"><?php echo gettext("Page d'achat")?></a></li>
			<li><a href="vente.php" title="<?php echo gettext("Aller sur la page de vente")?>"><?php echo gettext("Page de vente")?></a></li>
            <li><a href="panneau-administration.php" title="<?php echo gettext("Aller sur la page Panneau d'administration")?>"><?php echo gettext("Page Panneau d'administration")?></a></li>
			<li id="page-courante">Page Création de compte</li>
		</ul>
    </nav>
    <form action="../../controleur/inscription.php" id="formulaire-creation" method="post">
        <ul>
            <div id = "blocs-formulaire">
                <div id = "bloc-formulaire-1">
                    <li>Nom : <input type="text" name="nom" /></li>
                    <li>Prénom : <input type="text" name="prenom" /></li>
                    <li>Pseudonyme : <input type="text" name="pseudonyme" /></li>
                    <li>Adresse e-mail : <input type="text" name="email" /></li>
                    <li>Adresse : <input type="text" name="adresse" /></li>
                </div>
                <div id = "bloc-formulaire-2">
                    <li>Code postal : <input type="text" name="codepostal" /></li>
                    <li>Pays : <input type="text" name="pays" /></li>
                    <li>Ville : <input type="text" name="ville" /></li>
                    <li>Âge : <input type="text" name="anneenaissance" /></li>
                    <li>Téléphone : <input type="text" name="telephone" /></li>
                </div>
            </div>
        </ul>
        <input id="bouton" type="submit" value="Valider" name="controleur_inscription"/>
    </form>
</body>
</html>