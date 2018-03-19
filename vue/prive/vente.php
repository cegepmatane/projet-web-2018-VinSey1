<?php
	
	include "entete.php";
	require_once LISTE_ERREUR_FORMULAIRE;
	require_once CREATION_VENTE_CONTROLEUR;
?>

	<form action="vente.php" id="formulaire-vente" method="post">
		<ul>
			<li><?php echo gettext("Type de produit :")?>
				<select name="categorie">
					<option value="autre"><?php echo gettext("Autre")?></option>
					<option value="cuisine"><?php echo gettext("Cuisine")?></option>
					<option value="literie"><?php echo gettext("Literie")?></option>
					<option value="bureau"><?php echo gettext("Fournitures de bureau")?></option>
					<option value="livres"><?php echo gettext("Livres")?></option>
				</select>
				<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('categorie'));
						if(!empty($objet->getListeErreurActifPourChamp('categorie'))){ ?>
									<script>indiquerErreurInscription('categorie');</script><?php
						}	}	
						?>	
			</li>
			<li><?php echo gettext("Titre de la vente : ")?></li>
			<li><input type="text" name="titreDeVente" size="50" />
			<?php if ( $objet) {afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('titre'));
						if(!empty($objet->getListeErreurActifPourChamp('titre'))){ ?>
									<script>indiquerErreurInscription('titreDeVente');</script><?php
						}}
						?>
			</li>
			
			
			<li><?php echo gettext("Description du produit : ")?></li>
			<li><input type="text" name="descriptionProduit" size="50" id="gros-texte"/>
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('description'));
						if(!empty($objet->getListeErreurActifPourChamp('description'))){ ?>
									<script>indiquerErreurInscription('descriptionProduit');</script><?php
						}	}	
						?>	
			</li>
			
			<li><?php echo gettext("Détails : ")?></li>
			<li><input type="text" name="details" size="50" id="gros-texte"/>
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('details'));
						if(!empty($objet->getListeErreurActifPourChamp('details'))){ ?>
									<script>indiquerErreurInscription('detailsVente');</script><?php
						}	}	
						?>	
			</li>
			
			<li><?php echo gettext("Adresse : ")?></li>
			<li><input type="text" name="adresse" size="50" id="gros-texte"/>
			<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('adresse'));
						if(!empty($objet->getListeErreurActifPourChamp('adresse'))){ ?>
									<script>indiquerErreurInscription('adresse');</script><?php
						}	}	
						?>	
			</li>
			
			
			<li>
				<?php echo gettext("Prix : ")?> <input type="text" name="prix" size="1"/>
				<select >
					<option value="euro">€</option>
					<option value="dollars">$</option>
					<option value="livre">£</option>
				</select>
				<?php if ( $objet){ afficherListeErreurFormulaire($objet->getListeErreurActifPourChamp('prix'));
						if(!empty($objet->getListeErreurActifPourChamp('prix'))){ ?>
									<script>indiquerErreurInscription('prix');</script><?php
						}	}	
						?>
			</li>
		</ul>
		<input id="bouton" type="submit" value="Valider" name="controleur_vente"/>
	</form>
</body>
</html>