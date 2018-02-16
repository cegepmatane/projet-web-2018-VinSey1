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
	<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> <?php echo gettext("Profil d'un utilisateur") ?></title>
</head>
<body id="general-profil">
<header>
	<h1 id="titre-profil"> <?php echo gettext("Profil de $profil->pseudonyme") ?></h1>
</header>	
<ul id="navigation">
	<li><a href="catalogue.php" title="Aller sur la page Catalogue">Aller sur la page Catalogue</a></li>
	<li><a href="index.php" title="Aller sur la page Accueil">Aller sur la page Accueil</a></li>
	<li><a href="vente.php" title="Aller sur la page Vente">Aller sur la page Vente</a></li>
</ul>
<ul id="onglets-profil">
    <li class="active"><a href="Informations.html"> <?php echo gettext("Informations") ?></a></li>
    <li><a href="Ventes.html"> <?php echo gettext("Ventes") ?></a></li>
    <li><a href="Achats.html"> <?php echo gettext("Achats") ?></a></li>
    <li><a href="Avis_recus.html"> <?php echo gettext("Avis reçus") ?></a></li>
    <li><a href="Avis_donnes.html"> <?php echo gettext("Avis donnés") ?> </a></li>
    <li><a href="Modifier.html"> <?php echo gettext("Modifier") ?> </a></li>
</ul>
<div id="contenu-profil">
    <img id="image-profil" src="illustrations/tests/<?=$profil->illustration?>"/>
    <table id="informations-profil">
        <tr>
            <td class="td-profil">
                <?php echo gettext("Pseudonyme : $profil->pseudonyme") ?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                <?php echo gettext("Nom : $profil->nom") ?>
            </td>
            <td class="td-profil">
                <?php echo gettext("Prénom : $profil->prenom") ?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                <?php echo gettext("Âge : $profil->age") ?>
        <tr>
            <td class="td-profil">
                <?php echo gettext("Adresse  $profil->adresse") ?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                <?php echo gettext("Ville : $profil->ville") ?>
            </td>
            <td class="td-profil">
                <?php echo gettext("Code Postal : $profil->codepostal") ?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                <?php echo gettext("Pays : $profil->pays") ?>
            </td>
        </tr>
        <tr>
        <td class="td-profil">
                <?php echo gettext("E-mail : $profil->email") ?>
            </td>
        </tr>
        <tr>
        <td class="td-profil">
                <?php echo gettext("Téléphone : $profil->telephone") ?>
            </td>
        </tr>
    </table>
    <div class="statistiques-profil">
        <table>
            <tr>
                <td>
                    <?php echo gettext("Ventes :") ?>
                </td>
                <td>
                    <?=$profil->nbventes?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo gettext("Achats :") ?>
                </td>
                <td>   
                    <?=$profil->nbachats?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo gettext("Karma :") ?>
                </td>
                <td>
                    <?=$profil->karma?>
                </td>
            </tr>
    </table>
    </div>
    <input class = "bouton-profil" type="button" value="<?php echo gettext("Modifier vos informations")?>">
</div>
</body>
</html>