<?php

	include "entete.php";
	
	require_once DECONNEXION_UTILISATEUR_CONTROLEUR;
	
	
?>

<h3 id="sous-titre">Deconnectez-vous ! C'est gratuit et tellement simple !</h3>
<form action="deconnexion.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<ul>
						<li>
							<button type="submit" value="deconnexion" name="actionFormulaire"/><?php echo gettext("Se deconnecter");?></button>
						</li>
</form>
<?php 
	include "piedPage.php";
?>