<?php

	include "entete.php";
	
	require_once CONNEXION_UTILISATEUR_CONTROLEUR;
	
	
?>
<body>
<h3 id="sous-titre">Connectez-vous ! C'est gratuit et tellement simple !</h3>
<form action="connexion.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<ul>
						<li>
							<label for="pseudonyme"> <?php echo gettext("Pseudonyme"); ?>: </label>
							<input type="text" name="pseudonyme" id="pseudonyme"/>
																		
						</li>
						<li>
							<label for="motdepasse"> <?php echo gettext("Mot de passe"); ?>: </label>
							<input type="password" name="motdepasse" id="motdepasse"/>  
																			
						</li>
						<li>
							<button type="submit" value="connexion" name="actionFormulaire"/><?php echo gettext("Se connecter");?></button>
						</li>
					</ul>
				</div>
			</div>
</form>
<a href="inscription.php"><?php echo gettext("Pas de compte ? Inscrivez-vous !")?></a>
<?php 
	include "piedPage.php";
?>