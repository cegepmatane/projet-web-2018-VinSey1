<?php 
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
	<title> Profil d'un utilisateur</title>
</head>
<body id="general-profil">
<header>
	<h1 id="titre-profil">Profil de <?=$profil->pseudonyme?></h1>
</header>	
<ul id="onglets-profil">
    <li class="active"><a href="Accueil.html"> Informations </a></li>
    <li><a href="Accueil.html"> Ventes  </a></li>
    <li><a href="Livre_or.html"> Achats </a></li>
    <li><a href="Equipe.html"> Avis reçus </a></li>
    <li><a href="Inscription.html"> Avis donnés </a></li>
    <li><a href="Connexion.html"> Modifier </a></li>
</ul>
<div id="contenu-profil">
    <img id="image-profil" src="illustrations/tests/<?=$profil->illustration?>"/>
    <table id="informations-profil">
        <tr>
            <td class="td-profil">
                Pseudonyme : <?=$profil->pseudonyme?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                Nom : <?=$profil->nom?>
            </td>
            <td class="td-profil">
                Prénom : <?=$profil->prenom?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                Âge : <?=$profil->age?>
        <tr>
            <td class="td-profil">
                Adresse : <?=$profil->adresse?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                Ville : <?=$profil->ville?>
            </td>
            <td class="td-profil">
                Code Postal : <?=$profil->codepostal?>
            </td>
        </tr>
        <tr>
            <td class="td-profil">
                Pays : <?=$profil->pays?>
            </td>
        </tr>
        <tr>
        <td class="td-profil">
                E-mail : <?=$profil->email?>
            </td>
        </tr>
        <tr>
        <td class="td-profil">
                Téléphone : <?=$profil->telephone?>
            </td>
        </tr>
    </table>
    <div class="statistiques-profil">
        <table>
            <tr>
                <td>
                    Ventes :
                </td>
                <td>
                    <?=$profil->nbventes?>
                </td>
            </tr>
            <tr>
                <td>
                    Achats :
                </td>
                <td>   
                    <?=$profil->nbachats?>
                </td>
            </tr>
            <tr>
                <td>
                    Karma :
                </td>
                <td>
                    <?=$profil->karma?>
                </td>
            </tr>
    </table>
    </div>
    <input class = "bouton-profil" type="button" value="Modifier vos informations">
</div>
</body>
</html>