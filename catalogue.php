<?php	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	require_once "/controleur/controleurCatalogue.php";
	
?>

	<script src="ajax/montrerProduitCategorie.js"></script>
	<script src="ajax/listerTousLesObjets.js"></script>
	<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe">
		<input type="text" name="nato_pf"/>
		<button type="button" name="chercher">Chercher</button>
	</div>
	<div id="contenu-index">
		<ul id="zone-categories-index">
			<div id="categories-index">
				<li id="titre-categories"><h3><?php echo gettext("Catégories"); ?></h3></li>
				<button type="button" onclick="montrerProduitCategorie(1)"><?php echo gettext("Catégorie 1"); ?></button>
				<button type="button" onclick="montrerProduitCategorie(2)"><?php echo gettext("Catégorie 2"); ?></button>
				<button type="button" onclick="montrerProduitCategorie(3)"><?php echo gettext("Catégorie 3"); ?></button>
				<button type="button" onclick="montrerProduitCategorie(4)"><?php echo gettext("Catégorie 4"); ?></button>
				<button type="button" onclick="montrerProduitCategorie(5)"><?php echo gettext("Catégorie 5"); ?></button>
				<button type="button" onclick="montrerProduitCategorie(6)"><?php echo gettext("Catégorie 6"); ?></button>
				<button type="button" onclick="listerTousLesObjets()"><?php echo gettext("Voir tous les objets"); ?></button>
			</div>
		</ul>
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
			?>
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
						<li>
							<form action="achat.php" method="post">
								<input type="hidden" name="idObjet" value="<?php echo $objet->getIdObjet(); ?>"/>
								<input type="submit" value="Acheter"/>
							</form>
						</li>
					</ul>
				</div>
			<?php } ?>
		</div>
		<u id="boutons-index">
			<li><?php echo gettext("Prix")?></li>
			<li><input type="range" min="1" max="100" value="50" class="slider" id="myRange"></button></li>
			<li><?php echo gettext("De 0 à ")?> <span id="demo"></span> $</li>
			<li><button type="button"><?php echo gettext("Se connecter"); ?></button></li>
			<li><button type="button"><?php echo gettext("S'inscrire"); ?></button></li>
		</ul>
	</div>
	<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");
	output.innerHTML = slider.value;
	slider.oninput = function() {
		output.innerHTML = this.value;
	}
</script>
<?php 
	include "piedPage.php";

?>