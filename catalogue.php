<?php	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "barreDeRecherche.php";
	include "detailsObjet.php";
?>
	<script src="ajax/montrerProduitCategorie.js"></script>
	<script src="ajax/listerTousLesObjets.js"></script>
	<div id="contenu-index">
		<?php include "categories.php"; ?>
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
					detailsObjet($objet);
				}
			?>
		</div>
	</div>
<?php 
	include "piedPage.php";

?>