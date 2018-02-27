<?php 
	

	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;

?>

	<?php
		$objetDAO = new ObjetDAO();
		
		$idObjet = 1;
		
		if ( isset($_GET['idObjet']) ){
			$idObjet = $_GET['idObjet'];
			
		}

		$objet = $objetDAO->chercherParIdentifiant($idObjet);
	?>	
	<form action="../../controleur/modifierObjet.php" id="formulaire-vente" method="post">
		<input type="hidden" name="idObjet" value="<?php echo $objet->getIdObjet(); ?>"/>
		<ul>
			<li><?php echo gettext("Type de produit :")?>
				<select>
					<option selected value="<?php echo $objet->getCategorie();?>"><?php echo $objet->getCategorie();?></option>
						<?php if( $objet->getCategorie() == "Autre"){ ?>
							<option value="couverts"><?php echo gettext("Couverts")?></option>
							<option value="literie"><?php echo gettext("Literie")?></option>
						<?php } ?>
						<?php if( $objet->getCategorie() == "Couverts"){ ?>
							<option value="couverts"><?php echo gettext("Autre")?></option>
							<option value="literie"><?php echo gettext("Literie")?></option>
						<?php } ?>
						<?php if( $objet->getCategorie() == "Literie"){ ?>
							<option value="couverts"><?php echo gettext("Autre")?></option>
							<option value="literie"><?php echo gettext("Couverts")?></option>
						<?php } ?>
				</select>
			</li>
			<li><?php echo gettext("Titre de la vente : ")?></li>
			<li><input type="text" name="titreDeVente" size="50" value="<?php echo $objet->getTitreDeVente(); ?>" /></li>
			<li><?php echo gettext("Description du produit : ")?></li>
			<li><input type="text" name="descriptionProduit" size="50" id="gros-texte" value="<?php echo $objet->getDescriptionProduit(); ?>" /></li>
			<li><?php echo gettext("Détails : ")?></li>
			<li><input type="text" name="details" size="50" id="gros-texte" value="<?php echo $objet->getDetailsVente(); ?>" /></li>
			<li><?php echo gettext("Adresse : ")?></li>
			<li><input type="text" name="adresse" size="50" id="gros-texte" value="<?php echo $objet->getAdresse(); ?>"/></li>
			<li>
				<?php echo gettext("Prix : ")?> <input type="text" name="prix" size="1" value="<?php echo $objet->getPrix(); ?>"/>
				<select >
					<option value="euro">€</option>
					<option value="dollars">$</option>
					<option value="livre">£</option>
				</select>	
			</li>
			<li>
				<?php if ( $objet->getVedette() == 1){ ?>
					<?php echo gettext("Mettre en vedette ?") ?> <input checked type="radio" name="vedette" value="1"> Oui <input type="radio" name="vedette" value="0"> Non
				<?php } ?>
				<?php if ( $objet->getVedette() == 0){ ?>
					<?php echo gettext("Mettre en vedette ?") ?> <input type="radio" name="vedette" value="1"> Oui <input checked type="radio" name="vedette" value="0"> Non
				<?php } ?>
			</li>
		</ul>
		<input id="bouton" type="submit" value="Valider" name="controleur_modification_objet"/>
	</form>
	<form action="../../controleur/supprimerObjet.php" id="formulaire-vente" method="post">
					<input type="hidden" name="idObjet" value="<?php echo $objet->getIdObjet(); ?>"/>
					<input id="bouton" type="submit" value="Supprimer" name="controleur_suppression_objet"/>
	</form>
</body>
</html>
</html>