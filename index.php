<?php

	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include "barreDeRecherche.php";
	include_once "detailsObjet.php";
	
?>
	<div id="contenu-index">
		<div id="ensemble-produits">
			<?php
				$objetDAO = new ObjetDAO();
				$listeObjet = $objetDAO->obtenirListeObjet();
				foreach($listeObjet as $key => $objet) {
					if ($objet->getVedette() == 1 && $objet->getVedette()!=10) {
						detailsObjet($objet);
					}
				} 
			?>
		</div>
		<ul id="boutons-index">
		<?php 
			if (isset($_SESSION['id']) && isset($_SESSION['pseudonyme'])) {
		?>
			<li>
				<form action="deconnexion.php">
					<input type="submit" value="Se déconnecter"/>
				</form>
			</li>
			<li>
				<form action="vue/prive/vente.php">
					<input type="submit" value="Vendre un objet"/>
				</form>
			</li>
			
		<?php } else { ?>
			
			
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
		<?php } ?>
			
			
			
			
			
		</ul>
	</div>
<?php 
	include "piedPage.php";
?>