<?php
	include "entete.php";

	require_once LISTE_ERREUR_FORMULAIRE;
	require_once INSCRIPTION_UTILISATEUR_CONTROLEUR;

	
	function afficherPremierFormulaire($utilisateur = null){
	?>
		<script src="../scripts/retourUtilisateurInscriptionPublique.js"></script> 
		<h3> Renseignement sur l'identité </h3>
		<form action="inscription.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<ul>
						<li>
							<label for="prenom"> <?php echo gettext("Prénom"); ?>: </label>
							<input type="text" name="prenom" id="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
							<?php if ( $utilisateur) {
								
								afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('prenom'));
								?><script>indiquerErreurInscription('prenom');</script><?php
								
								}
							?>												
						</li>
						<li>
							<label for="nom"> <?php echo gettext("Nom"); ?>: </label>
							<input type="text" name="nom" id="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
							<?php 
								if ( $utilisateur){
									
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nom'));
									?><script>indiquerErreurInscription('nom');</script><?php
								} 
							?>												
						</li>
						<li>
							<label for="annee-naissance"> <?php echo gettext("Année de naissance"); ?>: </label>
							<input type="text" name="anneenaissance" id="annee-naissance" value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
							<?php 
							
								if ( $utilisateur){
									
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('age'));
									?><script>indiquerErreurInscription('annee-naissance');</script><?php
								} 
								
							
							?>
						</li>
						<li>
							<label for="pseudonyme"> <?php echo gettext("Pseudonyme"); ?>: </label>
							<input type="text" name="pseudonyme" id="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
							<?php 
								if ( $utilisateur){
									
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pseudonyme'));
									?><script>indiquerErreurInscription('pseudonyme');</script><?php
									
								} 
								
							?>
						</li>
						<li>
							<label for="motdepasse"> <?php echo gettext("Mot de passe"); ?>: </label>
							<input type="password" name="motdepasse" id="motdepasse" value="<?php if ( $utilisateur) echo $utilisateur->getMotDePasse(); ?>" />
						</li>
						<li>
							<label for="illustration"> <?php echo gettext("Illustration"); ?>: </label>
							<input type="text" name="illustration" id="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
							<?php
								if ( $utilisateur){
									
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('illustration'));
									?><script>indiquerErreurInscription('illustration');</script><?php
								}
							?>
						</li>
						<input type="hidden" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
						<input type="hidden" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
						<input type="hidden" name="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
						<input type="hidden" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
						<input type="hidden" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />						
						<input type="hidden" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />			
					</ul>
				</div>
			</div>	
			<button type="submit" value="finPremierFormulaire" name="actionFormulaire"/><?php echo gettext("Suivant");?></button>
		</form>

	<?php
	}

	function afficherDeuxiemeFormulaire($utilisateur){ ?>
	
		<h3> Renseignement sur l'adressse </h3>
		<script src="../scripts/retourUtilisateurInscriptionPublique.js"></script> 

		<form action="inscription.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<ul>
						<input type="hidden" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
						<input type="hidden" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
						<input type="hidden" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
						<input type="hidden" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
						<input type="hidden" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
		
						<li>
							<label for="adresse"> <?php echo gettext("Adresse"); ?>: </label>
							<input type="text" name="adresse" id="adresse" value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
							<?php
								if ( $utilisateur){
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('adresse'));
									?><script>indiquerErreurInscription('adresse');</script><?php
								}
							?>
						</li>
						<li>
							<label for="code-postal"> <?php echo gettext("Code postal"); ?>: </label>
							<input type="text" name="codepostal" id="code-postal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
							<?php
								if ( $utilisateur){								
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('codepostal'));
									?><script>indiquerErreurInscription('code-postal');</script><?php
								}
							?>		
						</li>
						
						<li>
							<label for="ville"> <?php echo gettext("Ville"); ?>: </label>
							<input type="text" name="ville" id="ville" value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
							<?php
								if ( $utilisateur){
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('ville'));
									?><script>indiquerErreurInscription('ville');</script><?php
								} 
							?>
						</li>
						<li>
							<label for="pays"> <?php echo gettext("Pays"); ?>: </label>
							<input type="text" name="pays" id="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
							<?php
								if ( $utilisateur){									
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pays'));
									?><script>indiquerErreurInscription('pays');</script><?php
								}
							?>
						</li>
						<input type="hidden" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
						<input type="hidden" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
					</ul>
				</div>
			</div>
			<button type="submit" value="PrecedentDeuxiemeFormulaire" name="actionFormulaire"/><?php echo gettext("Précédent")?></button>			
			<button type="submit" value="finDeuxiemeFormulaire" name="actionFormulaire"/><?php echo gettext("Suivant")?></button>			
		</form>
	
	<?php 
	} 
	
	function afficherTroisiemeFormulaire($utilisateur) {
	?>
		<h3> Renseignement sur les communications </h3>
		<script src="../scripts/retourUtilisateurInscriptionPublique.js"></script> 
		<form action="inscription.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<ul>
						
						<input type="hidden" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  						
						<input type="hidden" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />						
						<input type="hidden" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />						
						<input type="hidden" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />						
						<input type="hidden" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />						
						<input type="hidden" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />						
						<input type="hidden" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>						
						<input type="hidden" name="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />		
						<input type="hidden" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />

						<li>
							<label for="email"> <?php echo gettext("Adresse mail"); ?>: </label>						
							<input type="text" id="email" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
							<?php
								if ( $utilisateur){
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('email'));
									?><script>indiquerErreurInscription('email');</script><?php
								} 
							?>
						</li>
						<li>
							<label for="telephone"> <?php echo gettext("Téléphone"); ?>: </label>
							<input type="text" name="telephone" id="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
							<?php
								if ( $utilisateur){
									
									afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('telephone'));
									?><script>indiquerErreurInscription('telephone');</script><?php
								} 	
							?>
						</li>
					</ul>
				</div>
			</div>
			<button type="submit" value="PrecedentTroisiemeFormulaire" name="actionFormulaire"/><?php echo gettext("Précédent");?></button>		
			<button type="submit" value="finTroisiemeFormulaire" name="actionFormulaire"/><?php echo gettext("Suivant");?></button>
		</form>	
	
	<?php
	}
	function afficherRetroactionPositive($message){?>
		
		<p> <?php echo $message ?><p>
		
	<?php	
	}
	?>

<?php 
	include "piedPage.php";
	
?>