<?php

	include "entete.php";
	require_once '/controleur/controleurAchat.php';
	
	function afficherDetailObjet($objet){
?>
	
	<h1>
		<?php echo $objet->getTitreDeVente();?>
	</h1>
	<ul>
		<li>
			<?php echo $objet->getDescriptionProduit();?>
		</li>
		<li>
			<?php echo $objet->getDetailsVente();?>
		</li>
		<li>
			<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
		</li>
		<li>
			<?php echo $objet->getPrix();?> $
		</li>
	</ul>	
	<form action="#">
		<input type="button" value="acheter">
	</form>

<?php
	}
	include "piedPage.php";
?>