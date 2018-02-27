<?php
	

	$categorie = $_REQUEST["categorie"];
	
	$objetDAO = new ObjetDAO();
	$objet = $objetDAO->chercherParCategorie($categorie);
	
	foreach($listeObjet as $key => $objet) {
	?>
		<div class="produit-courant">
			<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
			<ul>
				<li><?php echo $objet->getTitreDeVente();?></li>
				<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
				<li><button type="button"><?php echo gettext("Acheter"); ?></button></li>
			</ul>
		</div>		
	<?php
	}
?>