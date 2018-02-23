<?php
	include "entete.php";
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once LISTE_ERREUR_FORMULAIRE;
	require_once INSCRIPTION_UTILISATEUR_CONTROLEUR;

	
	function afficherPremierFormulaire($utilisateur = null){
	?>
		<p> Renseignement sur l'identité <p>
		<form action="inscription.php" id="formulaire-creation" method="post">
			<ul>
				<div id = "blocs-formulaire">
					<div id = "bloc-formulaire-1">
						<li>Nom : <input type="text" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nom'));?>												
						</li>
						<li>Prénom : <input type="text" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('prenom'));?>												
						</li>
						<li>Âge : <input type="text" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('age'));?>
						</li>
						<li>Pseudonyme : <input type="text" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pseudonyme'));?>
						</li>
						<li>Illustration : <input type="text" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('illustration'));?>
						</li>
						<input type="hidden" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
						<input type="hidden" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
						<input type="hidden" name="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
						<input type="hidden" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
						<input type="hidden" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />						
						<input type="hidden" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
															
					</div>
				</div>
			</ul>
			<input id="bouton" type="submit" value="finPremierFormulaire" name="actionFormulaire"/>
		</form>

	<?php
	}

	function afficherDeuxiemeFormulaire($utilisateur){?>
	
		<p> Renseignement sur l'adressse <p>
		<form action="inscription.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<input type="hidden" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
					<input type="hidden" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
					<input type="hidden" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
					<input type="hidden" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
					<input type="hidden" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
	
					<li>Adresse : <input type="text" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('adresse'));?>
					</li>
					<li>Code postal : <input type="text" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('codepostal'));?>
					</li>
					<li>Pays : <input type="text" name="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pays'));?>
					</li>
					<li>Ville : <input type="text" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('ville'));?>
					</li>
					
					<input type="hidden" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
					<input type="hidden" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />

					
				</div>
			</div>
			<input id="bouton" type="submit" value="finDeuxiemeFormulaire" name="actionFormulaire"/>			
		</form>
	
	<?php 
	} 
	
	function afficherTroisiemeFormulaire($utilisateur) {
	?>
		<p> Renseignement sur les communications <p>
		<form action="inscription.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<input type="hidden" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  						
					<input type="hidden" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />						
					<input type="hidden" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />						
					<input type="hidden" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />						
					<input type="hidden" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />						
					<input type="hidden" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />						
					<input type="hidden" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>						
					<input type="hidden" name="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />		
					<input type="hidden" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />

					<li>Adresse e-mail : <input type="text" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('email'));?>
					</li>
					<li>Téléphone : <input type="text" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('telephone'));?>
					</li>
				</div>
			</div>
			<input id="bouton" type="submit" value="finTroisiemeFormulaire" name="actionFormulaire"/>			
		</form>	
	
	<?php
	}
	function afficherRetroactionPOisitive($message){?>
		
		<p> <?php echo $message ?><p>
		
	<?php	
	}
	?>
	
	
<?php 
	include "piedPage.php";

?>