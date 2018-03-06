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

					<label for="tireDeVente"> <?php echo gettext("Titre de vente"); ?>: </label>	
					<li>
						<label for="tireDeVente"> <?php echo gettext("Titre de vente"); ?>: </label>						
						<input type="text" name="titreDeVente" id="titreDeVente" value="<?php if ( $objet) echo $objet->getTitreDeVente(); ?>" />  
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('titre'));?>												
					</li>
					<li>
						<label for="identifiantVendeur"> <?php echo gettext("Identifiant du vendeur"); ?>: </label>
						<input type="text" id="identifiantVendeur" name="identifiantVendeur" value="<?php if ( $objet) echo $objet->getIdentifiantVendeur(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('identifiantVendeur'));?>												
					</li>
					<li>						
						<label for="adresse"> <?php echo gettext("Adresse"); ?>: </label>						
						<input type="text" name="adresse" id="adresse" value="<?php if ( $objet) echo $objet->getAdresse(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('adresse'));?>
					</li>
					<li>
						<label for="illustration"> <?php echo gettext("Ilustration"); ?>: </label>
						<input type="text" name="illustration" id="illustration" value="<?php if ( $objet) echo $objet->getIllustration(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('illustration'));?>
					</li>
				</div>	
				<div id = "bloc-formulaire-2">
					<li>
						<label for="categorie"> <?php echo gettext("Categorie"); ?>: </label>
						<input type="text" name="categorie" id="categorie" value="<?php if ( $objet) echo $objet->getCategorie(); ?>"/>
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('categorie'));?>
					</li>
					<li>
						<label for="prix"> <?php echo gettext("Prix"); ?>: </label>
						<input type="text" name="prix" id="prix" value="<?php if ( $objet) echo $objet->getPrix(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('prix'));?>
					</li>
					<li>
						<label for="descriptionProduit"> <?php echo gettext("Description du produit"); ?>: </label>
						<input type="text" id="descriptionProduit" name="descriptionProduit"  value="<?php if ( $objet) echo $objet->getDescriptionProduit(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('description'));?>
					</li>
					<li>
						<label for="detailsVente"> <?php echo gettext("Détails de la vente"); ?>: </label>
						<input type="text" name="detailsVente" id="detailsVente" value="<?php if ( $objet) echo $objet->getDetailsVente(); ?>" />
						<?php if ( $objet) afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('details'));?>
					</li>
					<li>
						<label for="vedette"> <?php echo gettext("Vedette"); ?>: </label>
						<input type="text" name="vedette" id="vedette" value="<?php if ( $objet) echo $objet->getVedette(); ?>" />
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
