<?php 
	// Création des données test
	$profil1 = new stdClass();
	$profil1->id = 1;
	$profil1->nom = "Baltz";
    $profil1->prenom = "Eliott";
    $profil1->pseudonyme = "Ace57880";
    $profil1->email = "eliott.baltz@gmail.com";
    $profil1->adresse = "616 Avenue Saint Rédempteur";
    $profil1->codepostal = "G4W 1L1 QC";
    $profil1->pays = "Canada";
    $profil1->nbachats = "6";
    $profil1->nbventes = "54";
    $profil1->karma = "100%";
    $profil1->illustration = "profil.png";
    $profil1->age = "20";
    $profil1->ville = "Matane";
    $profil1->telephone = "418-562-2609";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> Profil d'un utilisateur</title>
</head>
<body id="generalprofil">
<header>
	<h1 id="titreprofil">Profil de <?=$profil1->pseudonyme?></h1>
</header>	
<div id="menu">
    <ul id="onglets">
        <li class="active"><a href="Accueil.html"> Informations </a></li>
        <li><a href="Accueil.html"> Ventes  </a></li>
        <li><a href="Livre_or.html"> Achats </a></li>
        <li><a href="Equipe.html"> Avis reçus </a></li>
        <li><a href="Inscription.html"> Avis donnés </a></li>
        <li><a href="Connexion.html"> Modifier </a></li>
    </ul>
</div>
<div id="contenu">
    <img id="imgprofil" src="illustrations/tests/<?=$profil1->illustration?>"/>
    <table id="informations">
        <tr>
            <td class="tdprofil">
                Pseudonyme : <?=$profil1->pseudonyme?>
            </td>
        </tr>
        <tr>
            <td class="tdprofil">
                Nom : <?=$profil1->nom?>
            </td>
            <td class="tdprofil">
                Prénom : <?=$profil1->prenom?>
            </td>
        </tr>
        <tr>
            <td class="tdprofil">
                Âge : <?=$profil1->age?>
        <tr>
            <td class="tdprofil">
                Adresse : <?=$profil1->adresse?>
            </td>
        </tr>
        <tr>
            <td class="tdprofil">
                Ville : <?=$profil1->ville?>
            </td>
            <td class="tdprofil">
                Code Postal : <?=$profil1->codepostal?>
            </td>
        </tr>
        <tr>
            <td class="tdprofil">
                Pays : <?=$profil1->pays?>
            </td>
        </tr>
        <tr>
        <td class="tdprofil">
                E-mail : <?=$profil1->email?>
            </td>
        </tr>
        <tr>
        <td class="tdprofil">
                Téléphone : <?=$profil1->telephone?>
            </td>
        </tr>
    </table>
    <div class="ventesachatskarma">
        <table>
            <tr>
                <td>
                    Ventes :
                </td>
                <td>
                    <?=$profil1->nbventes?>
                </td>
            </tr>
            <tr>
                <td>
                    Achats :
                </td>
                <td>   
                    <?=$profil1->nbachats?>
                </td>
            </tr>
            <tr>
                <td>
                    Karma :
                </td>
                <td>
                    <?=$profil1->karma?>
                </td>
            </tr>
    </table>
    </div>
    <input class = "boutonprofil" type="button" value="Modifier vos informations">
</div>
</body>
</html>