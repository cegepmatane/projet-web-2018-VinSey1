<?php

	
	require_once RECHERCHE_UTILISATEUR_CONTROLEUR;
	
	
?>




<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe" alt="barre de recherche survie étudiante">
		<form action="barreDeRecherche.php" method="Post">
			<input type="text" name="requete"/>
			<input type="submit" name="chercher" value="<?php echo gettext("Chercher")?>" name="actionFormulaire" />
		</form>
		<img src=./illustrations/petit/loupe.png id="image-loupe" alt="barre de recherche survie étudiante">	
</div>


<?php 
	include "piedPage.php";
?>