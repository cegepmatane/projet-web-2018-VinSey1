<?php


	require_once OBJET_DAO;
	require_once OBJET_MODELE;	
	include "entete.php";
?>


	<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe">
		<input type="text" name="nato_pf"/>
	</div>
	<div id="contenu-index">
		<ul id="zone-categories-index">
			<div id="categories-index">
				<li id="titre-categories"><h3><?php echo gettext("Catégories"); ?></h3></li>
				<li><?php echo gettext("Catégorie 1"); ?></li>
				<li><?php echo gettext("Catégorie 2"); ?></li>
				<li><?php echo gettext("Catégorie 3"); ?></li>
				<li><?php echo gettext("Catégorie 4"); ?></li>
				<li><?php echo gettext("Catégorie 5"); ?></li>
				<li><?php echo gettext("Catégorie 6"); ?></li>
			</div>
		</ul>
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
					if ($objet->getVedette() == 1) {
			?>
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
						<li><button type="button"><?php echo gettext("Acheter"); ?></button></li>
					</ul>
				</div>
			<?php }} ?>
		</div>
		<ul id="boutons-index">
			<li><button type="button"><?php echo gettext("Vendre un objet"); ?></button></li>
			<li><button type="button"><?php echo gettext("Se connecter"); ?></button></li>
			<li>
				<form action="inscription.php">
					<input type="submit" value="S'inscrire"/>
				</form>
			</li>
		</ul>
	</div>
<?php 
	include "piedPage.php";
?>