<?php
    // Données test
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
	$produit1->image = "illustrations/petit/oreiller.png";

    $produit2 = new stdClass();
	$produit2->id = 2;
    $produit2->identifiantDeVente = "wr54u8ix1v18r9";
    $produit2->identifiantVendeur = "04524803548";
    $produit2->titreDeVente = "Draps";
    $produit2->categorie = 3;  // 3 : literie
    $produit2->prix = 12.0;
    $produit2->identifiantMonnaie = 0;  // 0 : dollarss
    $produit2->descriptionProduit = "Bonjour, je vends cet ensemble de draps, ils sont en parfait état";
    $produit2->detailsVente = "Je peux vous les apporter si vous habitez à québec, sinon il va falloir aller les chercher vous-même";
	$produit2->image = "illustrations/petit/draps.png";

    $produit3 = new stdClass();
	$produit3->id = 3;
    $produit3->identifiantDeVente = "d2j8e62g1j7y9s";
    $produit3->identifiantVendeur = "045215249";
    $produit3->titreDeVente = "Couette";
    $produit3->categorie = 3;  // 3 : literie
    $produit3->prix = 8.0;
    $produit3->identifiantMonnaie = 0;  // 0 : dollarss
    $produit3->descriptionProduit = "Vends couette, taille 1.5m * 0.7m";
    $produit3->detailsVente = "Je ne peux pas livrer il va falloir venir les chercher chez moi, j'habite à Montréal";
	$produit3->image = "illustrations/petit/couette.png";
	
	
	$tableauProduits = [$produit1, $produit2, $produit3];

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
		<p id="titre-survie-etudiante"> Survie étudiante</p>
		<div class="logo-Cegep-Matane">
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
						<td  class="element-selectionne">
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
					foreach($tableauProduits as $produitCourant){
				?>		
				<table id="colonne-centrale-accueil">
					<tr>
						<td>
							<img src="<?=$produitCourant->image?>" class="photo-miniature-produit"/>
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
					<p>
						Prix
					</p>
					<div>
						<input type="range" min="1" max="100" value="50" class="slider" id="myRange">
						<p>De 0 à <span id="demo"></span> $</p>
					</div>
					<script>
					var slider = document.getElementById("myRange");
					var output = document.getElementById("demo");
					output.innerHTML = slider.value;

					slider.oninput = function() {
					  output.innerHTML = this.value;
					}
					</script>
					
					


			</td>
		</th>
	
	
	</table>
	
		
	
</body>
</html>