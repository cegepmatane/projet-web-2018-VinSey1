<?php 
include "entete.php";
require_once LISTE_ERREUR_FORMULAIRE;
require_once OBJET_CONTROLEUR;


function afficherFormulaireObjet($actionFormulaire, $objet=null){

?>	
	<form action="administration-objet.php" id="formulaire-creation" method="post">
		<div id = "blocs-formulaire">
			<div id = "bloc-formulaire-1">
				<ul>
					<input type="hidden" name="idObjet" value="<?php if ( $objet) echo $objet->getIdObjet(); ?>"/>			
					<li>Titre de vente : <input type="text" name="titreDeVente" value="<?php if ( $objet) echo $objet->getTitreDeVente(); ?>" />  
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('titre'));?>												
					</li>
					<li>Identifiant vendeur : <input type="text" name="identifiantVendeur" value="<?php if ( $objet) echo $objet->getIdentifiantVendeur(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('identifiantVendeur'));?>												
					</li>
					<li>Adresse : <input type="text" name="adresse"  value="<?php if ( $objet) echo $objet->getAdresse(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('adresse'));?>
					</li>
					<li>Illustration : <input type="text" name="illustration" value="<?php if ( $objet) echo $objet->getIllustration(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('illustration'));?>
					</li>
				</div>	
				<div id = "bloc-formulaire-2">
					<li>Categorie : <input type="text" name="categorie" value="<?php if ( $objet) echo $objet->getCategorie(); ?>"/>
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('categorie'));?>
					</li>
					<li>Prix : <input type="text" name="prix" value="<?php if ( $objet) echo $objet->getPrix(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('prix'));?>
					</li>
					<li>Description du produit : <input type="text" name="descriptionProduit"  value="<?php if ( $objet) echo $objet->getDescriptionProduit(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('description'));?>
					</li>
					<li>Details de vente : <input type="text" name="detailsVente"  value="<?php if ( $objet) echo $objet->getDetailsVente(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('details'));?>
					</li>
					<li>Vedette : <input type="text" name="vedette"  value="<?php if ( $objet) echo $objet->getVedette(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('vedette'));?>
					</li>
				</ul>
			</div>	
		</div>
	<input id="bouton" type="submit" value="<?php echo $actionFormulaire ?>" name="actionFormulaire"/>
</form>		
		
<?php	
	
}

function afficherLienAjoutObjet(){ 
?>
<a href="administration-objet.php?actionNaviguation=Ajouter">Ajouter un objet</a>
<?php
}

function afficherListeObjet(){
	
	$objetDAO = new ObjetDAO();
	$listeObjet = $objetDAO->obtenirListeObjet();
	foreach($listeObjet as $key => $objet) { 
		$naviguationModification = "administration-objet.php?actionNaviguation=Modifier&idObjet=".$objet->getIdObjet();
		$naviguationSuppression = "administration-objet.php?actionNaviguation=Supprimer&idObjet=".$objet->getIdObjet();
	
	?>
		<div class="produit-courant">
			<ul>
				<li><?php echo gettext("Titre de vente");?>: <?php echo $objet->getTitreDeVente();?></li>
				<li><?php echo gettext("Identifiant vendeur");?>: <?php echo $objet->getIdentifiantVendeur();?></li>
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
/* peut etre pas necessaire  (utilisé dans suppression objet)  */
function afficherRetroactionNegative($message){?>
	
	<p> <?php echo $message ?> </p>
	
<?php	
}

?>

<?php 
	include "piedPage.php";

?>
