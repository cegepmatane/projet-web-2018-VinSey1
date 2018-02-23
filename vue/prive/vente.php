<?php
	require_once $_SERVER["DOCUMENT_ROOT"]."/controleur/mettreEnVente.php";
	include "entete.php";
?>

	<form action="../../controleur/mettreEnVente.php" id="formulaire-vente" method="post">
		<ul>
			<li><?php echo gettext("Type de produit :")?>
				<select>
					<option value="autre"><?php echo gettext("Autre")?></option>
					<option value="couverts"><?php echo gettext("Couverts")?></option>
					<option value="literie"><?php echo gettext("Literie")?></option>
				</select>
			</li>
			<li><?php echo gettext("Titre de la vente : ")?></li>
			<li><input type="text" name="titreDeVente" size="50" /></li>
			<li><?php echo gettext("Description du produit : ")?></li>
			<li><input type="text" name="descriptionProduit" size="50" id="gros-texte"/></li>
			<li><?php echo gettext("Détails : ")?></li>
			<li><input type="text" name="details" size="50" id="gros-texte"/></li>
			<li><?php echo gettext("Adresse : ")?></li>
			<li><input type="text" name="adresse" size="50" id="gros-texte"/></li>
			<li>
				<?php echo gettext("Prix : ")?> <input type="text" name="prix" size="1"/>
				<select >
					<option value="euro">€</option>
					<option value="dollars">$</option>
					<option value="livre">£</option>
				</select>	
			</li>
		</ul>
		<input id="bouton" type="submit" value="Valider" name="controleur_vente"/>
	</form>
</body>
</html>