<?php
	
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.staging.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;

	$categorie = $_REQUEST["categorie"];
	
	$objetDAO = new ObjetDAO();
	$listeObjet = $objetDAO->chercherParCategorie($categorie);
	
	var_dump($listeObjet);
	
	if ( isset($listeObjet)){
		
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
	}
	else{
		
		echo 'aucun objet dans cette catégorie !';
	}
	
	
?>