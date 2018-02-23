<?php 
include "entete.php";
require_once LISTE_ERREUR_FORMULAIRE;
require_once OBJET_CONTROLEUR;


function afficherFormulaireObjet($actionFormulaire, $objet=null){

?>	
	<form action="administration-objet.php" id="formulaire-creation" method="post">
		<ul>
			<div id = "blocs-formulaire">
				<div id = "bloc-formulaire-1">		
					<input type="hidden" name="idObjet" value="<?php if ( $objet) echo $objet->getIdObjet(); ?>"/>			
					<li>Titre de vente : <input type="text" name="titreDeVente" value="<?php if ( $objet) echo $objet->getTitreDeVente(); ?>" />  
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('titreDeVente'));?>												
					</li>
					<li>Identifiant vendeur : <input type="text" name="identifiantVendeur" value="<?php if ( $objet) echo $objet->getIdentifiantVendeur(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('identifiantVendeur'));?>												
					</li>
					<li>Adresse : <input type="text" name="adresse"  value="<?php if ( $objet) echo $objet->getAdresse(); ?>" /></li>
					<li>Illustration : <input type="text" name="illustration" value="<?php if ( $objet) echo $objet->getIllustration(); ?>" /></li>
				</div>	
				<div id = "bloc-formulaire-2">
					<li>Categorie : <input type="text" name="categorie" value="<?php if ( $objet) echo $objet->getCategorie(); ?>"/></li>
					<li>Prix : <input type="text" name="prix" value="<?php if ( $objet) echo $objet->getPrix(); ?>" /></li>
					<li>Ville : <input type="text" name="ville"  value="<?php if ( $objet) echo $objet->getVille(); ?>" /></li>
					<li>Âge : <input type="text" name="anneenaissance"  value="<?php if ( $objet) echo $objet->getAge(); ?>" /></li>
					<li>Téléphone : <input type="text" name="telephone" value="<?php if ( $objet) echo $objet->getTelephone(); ?>" /></li>
					<li>Nombre de ventes : <input type="text" name="nbventes" value="<?php if ( $objet) echo $objet->getNbventes(); ?>" /></li>
					<li>Nombre d'achats : <input type="text" name="nbachats" value="<?php if ( $objet) echo $objet->getNbachats(); ?>" /></li>
					<li>Role : <input type="text" name="role" value="<?php if ( $objet) echo $objet->getRole(); ?>" /></li>
				</div>	
			</div>
		</ul>
		<input id="bouton" type="submit" value="<?php echo $actionFormulaire ?>" name="actionFormulaire"/>
    </form>		
		
<?php	
	
}

function afficherLienAjoutobjet(){ 
?>
<a href="administration-objet.php?actionNaviguation=Ajouter">Ajouter un objet</a>
<?php
}

function afficherListeobjet(){
	
	$objetDAO = new objetDAO();
	$listeobjet = $objetDAO->obtenirListeobjet();
	foreach($listeobjet as $key => $objet) { 
		$naviguationModification = "administration-objet.php?actionNaviguation=Modifier&idobjet=".$objet->getidobjet();
		$naviguationSuppression = "administration-objet.php?actionNaviguation=Supprimer&idobjet=".$objet->getidobjet();
	
	?>
		<div class="produit-courant">
			<ul>
				<li><?php echo gettext("Nom");?>: <?php echo $objet->getNom();?></li>
				<li><?php echo gettext("Prenom");?>: <?php echo $objet->getPrenom();?></li>
				<li><?php echo gettext("Pseudo");?>: <?php echo $objet->getPseudonyme();?></li>
				<li><a href= <?php echo $naviguationModification ?> > Modifier </a></li>
				<li><a href= <?php echo $naviguationSuppression ?> > Supprimer </a></li> 
			</ul>
		</div>
	<?php
	}
}
?>


<?php 
	include "piedPage.php";

?>
