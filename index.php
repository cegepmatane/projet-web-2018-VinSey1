<?php

	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "barreDeRecherche.php";
	include "listeObjets.php";
	
?>
	<div id="contenu-index">
		<?php include "categories.php" ?>
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
					if ($objet->getVedette() == 1) {
						listeObjets($objet);
					}
				} 
			?>
		</div>
		<ul id="boutons-index">
			<li><button type="button"><?php echo gettext("Vendre un objet"); ?></button></li>
			<li><button type="button"><?php echo gettext("Se connecter"); ?></button></li>
			<li>
				<form action="inscription.php">
					<input type="submit" value="S'inscrire"/>
				</form>
			</li>
		</ul>
	</div>
<?php 
	include "piedPage.php";
?>