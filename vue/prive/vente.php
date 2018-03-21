<?php
	
	include "entete.php";
	require_once LISTE_ERREUR_FORMULAIRE;
	require_once CREATION_VENTE_CONTROLEUR;
	
	
	
	function formulaireAjout($objet){
?>
	<script src="../../scripts/retourUtilisateurInscriptionPublique.js"></script> 
	<form action="vente.php" id="formulaire-vente" method="post">
		<ul>
			<li><?php echo gettext("Type de produit :")?>
				<select name="categorie" id="categorie">
					<option value="autres"><?php echo gettext("Autres")?></option>
					<option value="cuisine"><?php echo gettext("Cuisine")?></option>
					<option value="literie"><?php echo gettext("Literie")?></option>
					<option value="bureau"><?php echo gettext("Fournitures de bureau")?></option>
					<option value="livres"><?php echo gettext("Livres")?></option>
				</select>
				<?php if ( $objet){
						afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('categorie'));
						if(!empty($objet->getListeErreurActifPourChamp('categorie'))){ ?>
									<script>indiquerErreurInscription('categorie');</script><?php
						}	}	
						?>	
			</li>
			<li><?php echo gettext("Titre de la vente : ")?></li>
			<li><input type="text" name="titreDeVente" size="50" id="titreDeVente" value="<?php echo $objet->getTitreDeVente();?>"/>
			<?php if ( $objet) {
						afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('titre'));
						if(!empty($objet->getListeErreurActifPourChamp('titre'))){ ?>
									<script>indiquerErreurInscription('titreDeVente');</script><?php
						}}
						?>
			</li>
			
			
			<li><?php echo gettext("Description du produit : ")?></li>
			<li><input type="text" name="descriptionProduit" size="50" id="descriptionProduit" value="<?php echo $objet->getDescriptionProduit();?>" />
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('description'));
						if(!empty($objet->getListeErreurActifPourChamp('description'))){ ?>
									<script>indiquerErreurInscription('descriptionProduit');</script><?php
						}	}	
						?>	
			</li>
			
			<li><?php echo gettext("Détails : ")?></li>
			<li><input type="text" name="details" size="50" id="details" value="<?php echo $objet->getDetailsVente();?>"/>
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('details'));
						if(!empty($objet->getListeErreurActifPourChamp('details'))){ ?>
									<script>indiquerErreurInscription('details');</script><?php
						}	}	
						?>	
			</li>
			
			<li><?php echo gettext("Adresse : ")?></li>
			<li><input type="text" name="adresse" size="50" id="adresse" value="<?php echo $objet->getAdresse();?>"/>
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('adresse'));
						if(!empty($objet->getListeErreurActifPourChamp('adresse'))){ ?>
									<script>indiquerErreurInscription('adresse');</script><?php
						}	}	
						?>	
			</li>
			
			<li><?php echo gettext("Illustration : ")?></li>
			<li><input type="text" name="illustration" size="50" id="illustration" value="<?php echo $objet->getIllustration();?>"/>
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('illustration'));
						if(!empty($objet->getListeErreurActifPourChamp('illustration'))){ ?>
									<script>indiquerErreurInscription('illustration');</script><?php
						}	}	
						?>	
			</li>
			
			
			<li>
				<?php echo gettext("Prix : ")?> <input type="text" name="prix" size="1" id="prix" value="<?php echo $objet->getPrix();?>"/>
				<?php echo "\$CA" ;?>
				<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('prix'));
						if(!empty($objet->getListeErreurActifPourChamp('prix'))){ ?>
									<script>indiquerErreurInscription('prix');</script><?php
						}	}	
						?>
			</li>
			<input type="hidden" name="vedette"  value="0" />
		</ul>
		<input id="bouton" type="submit" value="Valider" name="actionFormulaire"/>
	</form>
<?php } ?>
</body>
</html>