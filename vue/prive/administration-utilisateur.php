<?php 
include "entete.php";
require_once LISTE_ERREUR_FORMULAIRE;
require_once UTILISATEUR_CONTROLEUR;


function afficherFormulaireUtilisateur($actionFormulaire, $utilisateur=null){
?>	
	<script src="../../scripts/retourUtilisateurInscriptionPublique.js"></script> 
	<form action="administration-utilisateur.php" id="formulaire-creation" method="post">
		
		<div id = "blocs-formulaire">
			<div id = "bloc-formulaire-1">		
				<ul>
					<input type="hidden" name="idUtilisateur" value="<?php if ( $utilisateur) echo $utilisateur->getIdUtilisateur(); ?>"/>

					
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
					<li>
						<label for="nbventes"> <?php echo gettext("Nombre de ventes"); ?>: </label>
						<input type="text" name="nbventes" id="nbventes" value="<?php if ( $utilisateur) echo $utilisateur->getNbventes(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nbventes'));?>
					</li>
					<li>
						<label for="nbachats"> <?php echo gettext("Nombre d'achats"); ?>: </label>
						<input type="text" name="nbachats" id="nbachats" value="<?php if ( $utilisateur) echo $utilisateur->getNbachats(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nbachats'));?>
					</li>
					<li>
						<label for="role"> <?php echo gettext("Rôle"); ?>: </label>
						<input type="text" name="role" id="role" value="<?php if ( $utilisateur) echo $utilisateur->getRole(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('role'));?>
					</li>
					<?php 
					if ($actionFormulaire == "Modifier"){?>
						<input type="hidden" name="motdepasse"  value="<?php if ( $utilisateur) echo $utilisateur->getMotDePasse(); ?>" />
					<?php } else {?>
						<label for="motdepasse"> <?php echo gettext("Mot de passe"); ?>: </label>
						<input type="text" name="motdepasse" id="motdepasse" value="<?php if ( $utilisateur) echo $utilisateur->getRole(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('motdepasse'));?>
					<?php }?>
				</ul>
			</div>	
		</div>
		<input id="bouton" type="submit" value="<?php echo $actionFormulaire ?>" name="actionFormulaire"/>
    </form>		
		
<?php	
	
}

function afficherLienAjoutUtilisateur(){ 
?>
<a href="administration-utilisateur.php?actionNaviguation=Ajouter">Ajouter un utilisateur</a>
<?php
}

function afficherListeUtilisateur(){
	
	$utilisateurDAO = new UtilisateurDAO();
	$listeutilisateur = $utilisateurDAO->obtenirListeUtilisateur();
	foreach($listeutilisateur as $key => $utilisateur) { 
		$naviguationModification = "administration-utilisateur.php?actionNaviguation=Modifier&idUtilisateur=".$utilisateur->getidUtilisateur();
		$naviguationSuppression = "administration-utilisateur.php?actionNaviguation=Supprimer&idUtilisateur=".$utilisateur->getidUtilisateur();
	
	?>
		<div class="produit-courant">
			<ul>
				<li><?php echo gettext("Nom");?>: <?php echo $utilisateur->getNom();?></li>
				<li><?php echo gettext("Prenom");?>: <?php echo $utilisateur->getPrenom();?></li>
				<li><?php echo gettext("Pseudonyme");?>: <?php echo $utilisateur->getPseudonyme();?></li>
				<li><a href= <?php echo $naviguationModification ?> > Modifier </a></li>
				<li><a href= <?php echo $naviguationSuppression ?> > Supprimer </a></li> 
			</ul>
		</div>
	<?php
	}
}

function afficherRetroactionPositive($message){?>
	
	<p> <?php echo $message ?> </p>
	
	
<?php	
}

function afficherRetroactionNegative($message){?>
	
	<p> <?php echo $message ?> </p>
	
<?php	
}
?>


<?php 
	include "piedPage.php";
?>
