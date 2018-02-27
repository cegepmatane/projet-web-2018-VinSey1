<?php

	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.staging.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;

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
				<form action="achat.php">
					<input type="submit" value="Acheter"/>
				</form>
			</li>
		</ul>
	</div>
<?php } ?>