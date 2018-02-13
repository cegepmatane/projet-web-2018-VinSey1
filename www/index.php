<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once OBJET_DAO;
	require_once OBJET_MODELE;
?>




<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel = "stylesheet" href = "decoration/style_general.css">		
	<title> Page dev </title>
</head>
<body>
</body>
</html>
	<header>
		<i>Page de développement</i>
		<p id="titre-survie-etudiante"> <?php echo gettext("Survie étudiante"); ?> </p>
		<div class="logo-cegep-matane">
			<img src=./illustrations/petit/cegepmatane_logo_petit.png>
		</div>
	</header>
	<ul id="navigation">
		<li><a href="profil.php" title="Aller sur la page Profil"><?php echo gettext("Page profil"); ?></a></li>
		<li><a href="catalogue.php" title="Aller sur la page Catalogue"><?php echo gettext("Page catalogue"); ?></a></li>
		<li><a href="vente.php" title="Aller sur la page Vente"><?php echo gettext("Page de vente"); ?></a></li>
		<li><a href="panneau-administration.php" title="Aller sur le panneau d'administration"><?php echo gettext("Page d'administration"); ?></a></li>

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
						<?php echo gettext("Catégories"); ?>
					</b>
				</p>
				<table>
					<tr>
						<td>
							<?php echo gettext("Catégories 1"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo gettext("Catégories 2"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo gettext("Catégories 3"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo gettext("Catégories 4"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo gettext("Catégories 5"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php echo gettext("Catégories 6"); ?>
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
							<img src="<?$objet->getIllustration();?>" class="photo-miniature-produit"/>
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
										<?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?> $
									</td>
								</tr>
								<tr>
									<td>
										<button type="button"><?php echo gettext("Acheter"); ?></button>
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

					<button type="button"><?php echo gettext("Vendre un objet"); ?></button>
					<p id="italique">
							<?php echo gettext("Identification");?>: <?php echo $objet->getPrix();?> 
					</p>
					<table id ="tableau-identification-accueil">
						<tr >
							<td>
								<button type="button"><?php echo gettext("Se connecter"); ?></button>
							</td>
						</tr>
						<tr>
							<td>
								<button type="button"><?php echo gettext("S'inscrire"); ?></button>	
							</td>
						</tr>
					</table>
			</td>
		</th>
	</table>
	
</body>
</html>