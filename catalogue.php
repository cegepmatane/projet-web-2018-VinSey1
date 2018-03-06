<?php	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	require_once "/controleur/controleurCatalogue.php";
	include "barreDeRecherche.php";
?>
	<script src="ajax/montrerProduitCategorie.js"></script>
	<script src="ajax/listerTousLesObjets.js"></script>
	<div id="contenu-index">
		<?php include "categories.php"; ?>
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