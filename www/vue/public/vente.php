<?php 
	// Création des données test
	$produit1 = new stdClass();
	$produit1->id = 1;
    $produit1->identifiantDeVente = "ez1ezac15hy8j";
    $produit1->identifiantVendeur = "04519875102";
    $produit1->titreDeVente = "Oreiller";
    $produit1->categorie = 3;  // 3 : literie
    $produit1->prix = 20.0;
    $produit1->identifiantMonnaie = 0;  // 0 : dollars
    $produit1->descriptionProduit = "Bonjour, je vends cet oreiller qui ne me sert plus, j'habite
    actuellement au Cégep de Matane";
    $produit1->detailsVente = "Je ne livre pas et je n'envoie pas par la poste, il faudra venir la chercher à Matane au Cégep";
    $produit1->adresse = "616 Avenue du Saint-Rédempteur G4W 1L1 Matane QC Québec";
	$produit1->illustration = "oreiller.png";
	$produit1->nom = "Vincent";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> Vente d'un objet</title>
</head>
<body id="generalproduit">
<header>
	<h1 id="titre_general"> <?=$produit1->titreDeVente?> à vendre </h1>
	<h2 id="titreprofil">Produit de <?=$produit1->identifiantVendeur?></h2>
</header>	
<img class="imgvente" src="illustrations/petit/<?=$produit1->illustration?>"/>
<table class="informations">
    <tr>
        <td class="tdinfovente">
            Description : <?=$produit1->descriptionProduit?>
        </td>
    </tr>
	<tr>
		<td class="tdinfovente">
			Detail : <?=$produit1->detailsVente?>
        </td>
	</tr>
	<tr>
		<td class="tdinfovente">
			 Prix : <?=$produit1->prix?>
        </td>
	</tr>
</table>
	<h2 id="titrevendeur"> Vendeur : </h2>
	<p class="tdinfovendeur">
		Nom : <?=$produit1->nom?>
	</p>
    <p class="tdinfovendeur">   
		Identifiant Vendeur : <?=$produit1->identifiantVendeur?>
    </p>
    <p class="tdinfovendeur">
        
          Adresse : <?=$produit1->adresse?>
      
    </p>
   <p id="boutonAchat">
		<input type="button" value="ACHETE ICI !">
	</p>
</body>
</html>
	

	