<?php 
	
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	include "detailsObjet.php";

	if ($_SESSION['role'] != 1){
		?> <script type='text/javascript'>document.location.replace('../../index.php');</script> <?php
	} else {
	
?>
	
	<div id="bloc-stat">
	<?php 
		include "graph.php";
	?>
		
	<div>
		<div class="onglets-profil" id="contenu_onglet_ventes">
				
				
				<?php echo gettext("Nombre d'objets : "); $objetDAO->compterObjet(); ?> </br>
				<?php echo gettext("Nombre d'objets vendus : "); $objetDAO->compterObjetVendu(); ?> </br>
		
				<form action="vendu.php">
					<input type="submit" value="Voir les objets vendus"/>
				</form>
					
				
		</div>
						
			
			<?php foreach($listeobjet as $key => $objet) { ?>		
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix(); echo gettext(" $");?></li>
						<li><a href="administration-objet.php?idObjet=<?php echo $objet->getIdObjet(); ?>"> Modifier </a></li>
						<li><a href="administration-objet.php?idObjet=<?php echo $objet->getIdObjet(); ?>"> Supprimer </a></li>
					</ul>
				</div>
			<?php } ?>
		</div>
		<div class="contenu-onglet" id="contenu_onglet_utilisateurs">
				<?php 
					$utilisateurDAO = new UtilisateurDAO();
					$listeutilisateur = $utilisateurDAO->obtenirListeUtilisateur();
				?>
				
				<?php echo gettext("Nombre d'utilisateurs : "); $utilisateurDAO->compterUtilisateur(); ?></br>
				
				
		
			
			<?php foreach($listeutilisateur as $key => $utilisateur) { ?>
				<div class="produit-courant">
					<ul>
						<li><?php echo gettext("Nom");?>: <?php echo $utilisateur->getNom();?></li>
						<li><?php echo gettext("Prenom");?>: <?php echo $utilisateur->getPrenom();?></li>
						<li><?php echo gettext("Pseudo");?>: <?php echo $utilisateur->getPseudonyme();?></li>
						<li><a href="administration-utilisateur.php?actionNaviguation=modifier&idUtilisateur=<?php echo $utilisateur->getidUtilisateur(); ?>"> Modifier </a></li>
						<li><a href="administration-utilisateur.php?actionNaviguation=supprimer&idUtilisateur=<?php echo $utilisateur->getidUtilisateur(); ?>"> Supprimer </a></li> 
					</ul>
				</div>
			<?php } ?>	
		</div>
		
	</div>
	<script type="text/javascript">
		console.log("hello");
		var onglet_courant = 'ventes';
		changer_onglet(onglet_courant);
		
	</script>
	<?php }?>
