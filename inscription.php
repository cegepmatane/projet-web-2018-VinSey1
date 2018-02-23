<?php
	include "entete.php";
	require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";

	require_once INSCRIPTION_UTILISATEUR_CONTROLEUR;
	

	
	function afficherPremierFormulaire($utilisateur = null){
	?>
		<p> Renseignement sur l'identité <p>
		<form action="inscription.php" id="formulaire-creation" method="post">
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
					<li>Adresse : <input type="hidden" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('adresse'));?>
					</li>
					<li>Code postal : <input type="hidden" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('codepostal'));?>
					</li>
					<li>Pays : <input type="hidden" name="hidden" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pays'));?>
					</li>
					<li>Ville : <input type="hidden" name="hidden"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('ville'));?>
					</li>
					<li>Adresse e-mail : <input type="hidden" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('email'));?>
					</li>
					<li>Téléphone : <input type="hidden" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('telephone'));?>
					</li>
				</div>
			</div>	
		</form>

	<?php
	}

	function afficherDeuxiemeFormulaire($utilisateur){?>
	
		<p> Renseignement sur l'adressse <p>
		<form action="inscription.php" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">
					<li>Nom : <input type="hidden" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nom'));?>												
					</li>
					<li>Prénom : <input type="hidden" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('prenom'));?>												
					</li>
					<li>Âge : <input type="hidden" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('age'));?>
					</li>
					<li>Pseudonyme : <input type="hidden" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pseudonyme'));?>
					</li>
					<li>Illustration : <input type="hidden" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('illustration'));?>
					</li>
					<li>Adresse : <input type="type" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('adresse'));?>
					</li>
					<li>Code postal : <input type="hidden" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('codepostal'));?>
					</li>
					<li>Pays : <input type="hidden" name="hidden" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pays'));?>
					</li>
					<li>Ville : <input type="hidden" name="hidden"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('ville'));?>
					</li>
					<li>Adresse e-mail : <input type="hidden" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('email'));?>
					</li>
					<li>Téléphone : <input type="hidden" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('telephone'));?>
					</li>
				</div>
			</div>	
		</form>
	
	<?php 
	} 
	?>

<?php 
	include "piedPage.php";

?>