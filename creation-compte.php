<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."./inscription.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./decoration/style_general_test.css">
    <link rel="stylesheet" type="text/css" href="./decoration/MyFontsWebfontsKit.css">		
	<title> Création de compte</title>
</head>
<body>
    <header>
        <div id="titre"> Survie étudiante</div>
        <div id="sous-titre"> Création de compte </div>
    </header>	
    <nav>
        <ul>
            <li><a href="index.php" title="Aller sur la page d'Accueil">Page d'Accueil</a></li>
            <li><a href="profil.php" title="Aller sur la page Profil">Page Profil</a></li>
            <li><a href="catalogue.php" title="Aller sur la page Catalogue">Page Catalogue</a></li>
            <li><a href="vente.php" title="Aller sur la page Vente">Page Vente</a></li>
            <li><a href="panneau-administration.php" title="Aller sur la page Panneau d'administration">Page Panneau d'administration</a></li>
            <li id="page-courante">Page Création de compte</li>
        </ul>
    </nav>
    <form action="controleur_inscription.php" id="formulaire-creation">
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