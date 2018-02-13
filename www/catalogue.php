<?php
   	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;

?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel = "stylesheet" href = "./decoration/style_general.css">		
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
	<ul id="navigation">
		<li><a href="profil.php" title="Aller sur la page Profil">Aller sur la page Profil</a></li>
		<li><a href="index.php" title="Aller sur la page Accueil">Aller sur la page Accueil</a></li>
		<li><a href="vente.php" title="Aller sur la page Vente">Aller sur la page Vente</a></li>
	</ul>
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
					$objetDAO = new ObjetDAO();
					$listeObjet = $objetDAO->obtenirListeObjet();
					foreach($listeObjet as $key => $objet) {
				?>		
				<table id="colonne-centrale-accueil">
					<tr>
						<td>
							<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
						</td>
						<td>
							<table >
								<tr>
									<td>
										<?php echo $objet->getTitreDeVente();?>
									</td>
								</tr>
								<tr>
									<td>
										Prix: <?php echo $objet->getPrix();?> $
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