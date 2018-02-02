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
    $profil1->nbventes = "54";
    $profil1->karma = "100%";
    $profil1->illustration = "profil.png";
	
    $profil2 = new stdClass();
	$profil2->id = 1;
	$profil2->nom = "Seyller";
    $profil2->prenom = "Vincent";
    $profil2->pseudonyme = "VinSey1";
    $profil2->email = "vseyller@laposte.net";
    $profil2->adresse = "616 Avenue Saint Rédempteur";
    $profil2->codepostal = "G4W 1L1 QC";
    $profil2->pays = "Canada";

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
        <td class="tdprofil">
            E-mail : <?=$profil1->email?>
        </td>
    </tr>
    <tr>
        <td class="tdprofil">
            Adresse : <?=$profil1->adresse?>
        </td>
        <td class="tdprofil">
            Code Postal : <?=$profil1->codepostal?>
        </td>
        <td class="tdprofil">
            Pays : <?=$profil1->pays?>
        </td>
    </tr>
</table>
</body>
</html>