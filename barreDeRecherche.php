<?php

	include_once "entete.php";
	require_once RECHERCHE_UTILISATEUR_CONTROLEUR;
	
	
?>


<body>

<div id="barre-de-recherche" >
		<img src=./illustrations/petit/loupe.png id="image-loupe" alt="barre de recherche survie étudiante">
		<form action="barreDeRecherche.php" method="Post">
			<input type="text" name="requete"/>
			<input type="submit" value="<?php echo gettext("Rechercher")?>" name="actionFormulaire" />
		</form>
		<img src=./illustrations/petit/loupe.png id="image-loupe" alt="barre de recherche survie étudiante">	
</div>


