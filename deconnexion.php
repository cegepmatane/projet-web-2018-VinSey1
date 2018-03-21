<?php

	include "entete.php";
	
	require_once DECONNEXION_UTILISATEUR_CONTROLEUR;
	
	
?>

<h3 id="sous-titre">Vous nous quittez déjà ? </h3>
<form action="deconnexion.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<ul>
						<li>
							<button type="submit" value="deconnexion" name="actionFormulaire"/><?php echo gettext("Se déconnecter");?></button>
						</li>
</form>
<?php 
	include "piedPage.php";
?>