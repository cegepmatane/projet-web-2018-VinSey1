<?php 
include "entete.php";
require_once LISTE_ERREUR_FORMULAIRE;
require_once UTILISATEUR_CONTROLEUR;


function afficherFormulaireUtilisateur($actionFormulaire, $utilisateur=null){

?>	
	<form action="administration-utilisateur.php" id="formulaire-creation" method="post">
		<ul>
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">		
					<input type="hidden" name="idUtilisateur" value="<?php if ( $utilisateur) echo $utilisateur->getIdUtilisateur(); ?>"/>			
					<li>Nom : <input type="text" name="nom" value="<?php if ( $utilisateur) echo $utilisateur->getNom(); ?>" />  
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nom'));?>												
					</li>
					<li>Prénom : <input type="text" name="prenom" value="<?php if ( $utilisateur) echo $utilisateur->getPrenom(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('prenom'));?>												
					</li>
					<li>Pseudonyme : <input type="text" name="pseudonyme" value="<?php if ( $utilisateur) echo $utilisateur->getPseudonyme(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pseudonyme'));?>												
					</li>
					<li>Adresse e-mail : <input type="text" name="email"  value="<?php if ( $utilisateur) echo $utilisateur->getEmail(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('email'));?>
					</li>
					<li>Adresse : <input type="text" name="adresse"  value="<?php if ( $utilisateur) echo $utilisateur->getAdresse(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('adresse'));?>
					</li>
					<li>Illustration : <input type="text" name="illustration" value="<?php if ( $utilisateur) echo $utilisateur->getIllustration(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('illustration'));?>
					</li>
				</div>	
				<div id = "bloc-formulaire-2">
					<li>Code postal : <input type="text" name="codepostal" value="<?php if ( $utilisateur) echo $utilisateur->getCodepostal(); ?>"/>
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('codepostal'));?>
					</li>
					<li>Pays : <input type="text" name="pays" value="<?php if ( $utilisateur) echo $utilisateur->getPays(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('pays'));?>
					</li>
					<li>Ville : <input type="text" name="ville"  value="<?php if ( $utilisateur) echo $utilisateur->getVille(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('ville'));?>
					</li>
					<li>Âge : <input type="text" name="anneenaissance"  value="<?php if ( $utilisateur) echo $utilisateur->getAge(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('age'));?>
					</li>
					<li>Téléphone : <input type="text" name="telephone" value="<?php if ( $utilisateur) echo $utilisateur->getTelephone(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('telephone'));?>
					</li>
					<li>Nombre de ventes : <input type="text" name="nbventes" value="<?php if ( $utilisateur) echo $utilisateur->getNbventes(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nbventes'));?>
					</li>
					<li>Nombre d'achats : <input type="text" name="nbachats" value="<?php if ( $utilisateur) echo $utilisateur->getNbachats(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('nbachats'));?>
					</li>
					<li>Role : <input type="text" name="role" value="<?php if ( $utilisateur) echo $utilisateur->getRole(); ?>" />
						<?php if ( $utilisateur) afficherListeErreurFormulaire($utilisateur->getListeErreurActifPourChamp('role'));?>
					</li>
				</div>	
			</div>
		</ul>
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
				<li><?php echo gettext("Pseudo");?>: <?php echo $utilisateur->getPseudonyme();?></li>
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
/* peut etre pas necessaire  (utilisé dans suppression utilisateur)  */
function afficherRetroactionNegative($message){?>
	
	<p> <?php echo $message ?> </p>
	
<?php	
}

?>


<?php 
	include "piedPage.php";

?>
