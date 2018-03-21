<?php	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "barreDeRecherche.php";
	include_once "detailsObjet.php";
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
					if ($objet->getVedette()!=10){
						detailsObjet($objet,0);
					}
				}
			?>
		</div>
	</div>
<?php 
	include "piedPage.php";

?>