<?php

	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "barreDeRecherche.php";
	include "listeObjets.php";
	
?>
	<div id="contenu-index">
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
			
			<li>
				<form action="connexion.php">
					<input type="submit" value="Se connecter"/>
				</form>
			</li>
			<li>
				<form action="inscription.php">
					<input type="submit" value="S'inscrire"/>
				</form>
			</li>
			<li>
			<?php var_dump($_SESSION); ?>
			</li>
			
		</ul>
	</div>
<?php 
	include "piedPage.php";
?>