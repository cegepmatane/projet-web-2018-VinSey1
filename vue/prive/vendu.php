<?php	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "../../detailsObjet.php";
?>

<div id="contenu-index">
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
					if ($objet->getVedette() == 10) {
						detailsObjet($objet,1);
					}
				} 
			?>
		</div>
