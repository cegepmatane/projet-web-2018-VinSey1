<?php 

    /*
    $language = "fr_FR";
    putenv("LANG=" . $language);
    setlocale(LC_ALL, $language);

    $domain = "messages";
    bindtextdomain($domain,"Locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    
    textdomain($domain);
    */
    
	// Création des données test
	$profil = new stdClass();
	$profil->id = 1;
	$profil->nom = "Baltz";
    $profil->prenom = "Eliott";
    $profil->pseudonyme = "Ace57880";
    $profil->email = "eliott.baltz@gmail.com";
    $profil->adresse = "616 Avenue Saint Rédempteur";
    $profil->codepostal = "G4W 1L1 QC";
    $profil->pays = "Canada";
    $profil->nbachats = "6";
    $profil->nbventes = "54";
    $profil->karma = "100%";
    $profil->illustration = "profil.png";
    $profil->age = "20";
    $profil->ville = "Matane";
    $profil->telephone = "418-562-2609";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel = "stylesheet" href = "./decoration/style_general_test.css">		
	<title> <?php echo gettext("Profil d'un utilisateur") ?></title>
</head>
<body>
<header>
	<h1 id="titre-profil"> <?php echo gettext("Profil de $profil->pseudonyme") ?></h1>
</header>	
<nav>
    <ul>
        <li><a href="catalogue.php" title="Aller sur la page Catalogue">Aller sur la page Catalogue</a></li>
        <li><a href="index.php" title="Aller sur la page Accueil">Aller sur la page Accueil</a></li>
        <li><a href="vente.php" title="Aller sur la page Vente">Aller sur la page Vente</a></li>
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
    <img id="image-profil" src="illustrations/tests/<?=$profil->illustration?>"/>
    <ul>
        <div class="informations">
            <li> <?php echo gettext("Pseudonyme : $profil->pseudonyme") ?> </li>
            <li> <?php echo gettext("Nom : $profil->nom") ?> </li>
            <li> <?php echo gettext("Prénom : $profil->prenom") ?> </li>
            <li> <?php echo gettext("Âge : $profil->age") ?> </li>
        </div>
        <div class="informations">
            <li> <?php echo gettext("Adresse  $profil->adresse") ?> </li>
            <li> <?php echo gettext("Ville : $profil->ville") ?> </li>
            <li> <?php echo gettext("Code Postal : $profil->codepostal") ?> </li>
            <li> <?php echo gettext("Pays : $profil->pays") ?> </li>
            <li> <?php echo gettext("E-mail : $profil->email") ?> </li>
            <li> <?php echo gettext("Téléphone : $profil->telephone") ?> </li>
        </div>
    </ul>
    <ul>
        <div class="statistiques">
            <li> <?php echo gettext("Ventes : $profil->nbventes") ?> </li>
            <li> <?php echo gettext("Achats : $profil->nbachats") ?> </li>
            <li> <?php echo gettext("Karma : $profil->karma") ?> </li>
        </div>
    </ul>
    <input type="button" value="<?php echo gettext("Modifier vos informations")?>">
</div>
</body>
</html>