<?php
	// Données test
	$produit1 = new stdClass();
	$produit1->identifiantDeVente = "ez1ezac15hy8j";
	$produit1->identifiantVendeur = 04519875102;
	$produit1->titreDeVente = "Casserole en metal";
	$produit1->categorie = 0;  // 0 : Ustensiles de cuisine
	$produit1->prix = 20.0;
	$produit1->identifiantMonnaie = 0;  // 0 : dollars
	$produit1->descriptionProduit = "Bonjour, je vends cette casserole qui ne me sert plus, j'habite
	actuellement au Cégep de Matane";
	$produit1->detailsVente = "Je ne livre pas et je n'envoie pas par la poste, il faudra venir la chercher à Matane au Cégep";
	$produit1->adresse = "616 Avenue du Saint-Rédempteur G4W 1L1 Matane QC Québec";
	$produit1->image = "illustrations/tests/casserole.jpg";
	
	$produit2 = new stdClass();
	$produit2->identifiantDeVente = "wr54u8ix1v18r9";
	$produit2->identifiantVendeur = 04524803548;
	$produit2->titreDeVente = "Ensemble de couverts";
	$produit2->categorie = 0;  // 0 : ustensiles de cuisine
	$produit2->prix = 12.0;
	$produit2->identifiantMonnaie = 0;  // 0 : dollarss
	$produit2->descriptionProduit = "Bonjour, je vends cet ensemble de couverts, ils sont en parfait état";
	$produit2->detailsVente = "Je peux vous les apporter si vous habitez à québec, sinon il va falloira aller les chercher vous-même";
	$produit2->image = "illustrations/tests/couverts.jpg";
	
	$produit3 = new stdClass();
	$produit3->identifiantDeVente = "d2j8e62g1j7y9s";
	$produit3->identifiantVendeur = 045215249;
	$produit3->titreDeVente = "Vend serviette de bain";
	$produit3->categorie = 1;  // 1 : Hygiène
	$produit3->prix = 8.0;
	$produit3->identifiantMonnaie = 0;  // 0 : dollarss
	$produit3->descriptionProduit = "Vends serviette, taille 1.5m * 0.7m";
	$produit3->detailsVente = "Je ne peux pas livrer il va falloir venir les chercher chez moi, j'habite à Montréal";
	$produit3->image = "illustrations/tests/serviette.jpg";
	
	
	$tableauProduit = array(
		$produit1,
		$produit2,
		$produit3,
	);
	
?>




<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> Page dev </title>
</head>
<body>
	<header>
		<i>Page de développement</i>
		<p id="titre_survie_etudiante"> Survie étudiante</p>
		<div class="logo_Cegep_Matane">
			<img src=./illustrations/petit/cegepmatane_logo_petit.png>
		</div>
	</header>
	<div  id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe">
		<input type="text" name="nato_pf"/>
	</div>
	<table id = "tabeau-principal-page-accueil">
	
		<th>
			<td id="colonne-gauche-accueil">
				<p>
					<b>
						Catégories
					</b>
				</p>
				<table>
					<tr>
						<td>
							Catégorie 1
						</td>
					</tr>
					<tr>
						<td>
							Catégorie 2
						</td>
					</tr>
					<tr>
						<td>
							Catégorie 3
						</td>
					</tr>
					<tr>
						<td>
							Catégorie 4
						</td>
					</tr>
					<tr>
						<td>
							Catégorie 5
						</td>
					</tr>
					<tr>
						<td>
							Catégorie 6
						</td>
					</tr>
				</table>
			</td>

			<td>
			<?php 
					foreach($tableauProduit as $produitCourant){
				?>		
				<table id="colonne-centrale-accueil">
					<tr>
						<td>
							<img src="<?=$produitCourant->image?>" class="photo_miniature_produit"/>
						</td>
						<td>
							<table >
								<tr>
									<td>
										<?=$produitCourant->titreDeVente?>
									</td>
								</tr>
								<tr>
									<td>
										Prix: <?=$produitCourant->prix?> $
									</td>
								</tr>
								<tr>
									<td>
										<button type="button">Acheter</button>
									</td>
								</tr>
						
							</table>
						</td>
					</tr>
				</table>
				<?php	
				}
				?>
			</td>

			<td id="colonne-droite-accueil">

					<button type="button">Vendre un objet</button>
					<p>
						<i> 
							Identification 
						</i>
					</p>
					<table id ="tableau-identification-accueil">
						<tr >
							<td>
								<button type="button">Se connecter</button>
							</td>
						</tr>
						<tr>
							<td>
								<button type="button">S'inscrire</button>	
							</td>
						</tr>
					</table>
					


			</td>
		</th>
	
	
	</table>
	
		
	
</body>
</html>