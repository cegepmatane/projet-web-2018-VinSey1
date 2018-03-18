<?php 
	include "entete.php";
	require_once LISTE_ERREUR_FORMULAIRE;
	require_once MODIFICATION_PROFIL_CONTROLEUR;
	

	function formulaireModification($utilisateur){?>
		<script src="../../scripts/retourUtilisateurInscriptionPublique.js"></script> 
		<form action="profil.php?Modification=1" id="formulaire-creation" method="post">
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">		
					<ul>
						<li>
							<label for="nom"> <?php echo gettext("Nom"); ?>: </label>
							<input type="text" name="nom" id="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nom'));
							if(!empty($utilisateur->getListeErreurActifPourChamp('nom'))){ ?>
										<script>indiquerErreurInscription('nom');</script><?php
							}	
							?>
						</li>
						<li>
							<label for="prenom"> <?php echo gettext("Prénom"); ?>: </label>
							<input type="text" name="prenom" id="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('prenom'));
							if(!empty($utilisateur->getListeErreurActifPourChamp('prenom'))){ ?>
								<script>indiquerErreurInscription('prenom');</script><?php
							}	
							?>											
						</li>
						<li>
							<label for="pseudonyme"> <?php echo gettext("Pseudonyme"); ?>: </label>
							<input type="text" name="pseudonyme" id="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pseudonyme'));?>												
						</li>
						<li>
							<label for="email"> <?php echo gettext("Adresse mail"); ?>: </label>
							<input type="text" name="email" id="email" value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('email'));?>
						</li>
						<li>
							<label for="adresse"> <?php echo gettext("Adresse"); ?>: </label>
							<input type="text" name="adresse" id="adresse" value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('adresse'));?>
						</li>
						<li>
							<label for="illustration"> <?php echo gettext("Illustration"); ?>: </label>
							<input type="text" name="illustration" id="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('illustration'));?>
						</li>
						
						
					</div>	
					<div id = "bloc-formulaire-2">
						<li>
							<label for="code-postal"> <?php echo gettext("Code postal"); ?>: </label>
							<input type="text" name="codepostal" id="code-postal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('codepostal'));?>
						</li>
						<li>
							<label for="pays"> <?php echo gettext("Pays"); ?>: </label>
							<input type="text" name="pays" id="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pays'));?>
						</li>
						<li>
							<label for="ville"> <?php echo gettext("Ville"); ?>: </label>
							<input type="text" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('ville'));?>
						</li>
						<li>
							<label for="age"> <?php echo gettext("Date de naissance"); ?>: </label>
							<input type="text" name="anneenaissance" id="age" value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('age'));?>
						</li>
						<li>
							<label for="telephone"> <?php echo gettext("Téléphone"); ?>: </label>
							<input type="text" name="telephone" id="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
							<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('telephone'));?>
						</li>
						<input type="hidden" name="idUtilisateur" value="<?php if ( $utilisateur) echo $utilisateur->getIdUtilisateur(); ?>"/>
						<input type="hidden" name="nbventes"  value="<?php if ( $utilisateur) echo $utilisateur->getNbventes(); ?>" />
						<input type="hidden" name="nbachats"  value="<?php if ( $utilisateur) echo $utilisateur->getNbachats(); ?>" />
						<input type="hidden" name="role"  value="<?php if ( $utilisateur) echo $utilisateur->getRole(); ?>" />
						<input type="hidden" name="motdepasse"  value="<?php if ( $utilisateur) echo $utilisateur->getMotDePasse(); ?>" />
					</ul>
				</div>	
			</div>
			<input id="bouton" type="submit" value="Modification" name="Modification"/>
		</form>	
	<?php } 
	function afficherInformations($utilisateur) {?>
	<div>
		<img src="<?=$utilisateur->getIllustration();?>" id="image-profil" />
		<ul>
			<li><?php echo gettext("Nom : ").$utilisateur->getNom(); ?></li>
			<li><?php echo gettext("Prénom : ").$utilisateur->getPrenom(); ?></li>
			<li><?php echo gettext("Pseudonyme : ").$utilisateur->getPseudonyme(); ?></li>
			<li><?php echo gettext("Année de naissance : ").$utilisateur->getAge(); ?></li>
			<li><?php echo gettext("Email : ").$utilisateur->getEmail(); ?></li>
			<li><?php echo gettext("Adresse : ").$utilisateur->getAdresse().", "
			.$utilisateur->getCodepostal()." ".$utilisateur->getVille().", "
			.$utilisateur->getPays(); ?></li>
			<li><?php echo gettext("Nombre d'achats : ").$utilisateur->getNbachats(); ?></li>
			<li><?php echo gettext("Nombre de ventes : ").$utilisateur->getNbventes(); ?></li>
		</ul>
	</div>
	<a href="profil.php?Modifier"><?php echo gettext("Modifier vos informations")?></a>
</body>
</html>
<?php }?>