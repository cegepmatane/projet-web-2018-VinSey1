<?php 
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
?>
	<script type="text/javascript">
		
		function changer_onglet(name){
		
			document.getElementById('onglet_'+onglet_courant).className = "onglet-non-selectionne";
			document.getElementById('contenu_onglet_'+onglet_courant).style.display = 'none';
			document.getElementById('contenu_onglet_'+name).style.display = 'block';
			document.getElementById('onglet_'+name).className = "onglet-selectionne";
			onglet_courant = name;
		}	
		
	</script>
	<div class="onglet-cliquable">
		<span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Catalogue des Ventes") ?></span>
		<span id="onglet_utilisateurs" onclick="javascript:changer_onglet('utilisateurs');" ><?php echo gettext("Catalogue des utilisateurs") ?></span>
	</div>
	<div id="bloc-stat">
	<?php 
		include "graph.php";
	?>
		
	<div>
		<div class="onglets-profil" id="contenu_onglet_ventes">
				
				
				<?php echo gettext("Nombre d'objets : "); $objetDAO->compterObjet(); ?> </br>
				<?php echo gettext("Chercher des ventes");?></br>
				<?php echo gettext("Identifiant de la vente");?> <input type="text" ></br>
				<?php echo gettext("Identifiant du vendeur");?> <input type="text" ></br>
				<?php echo gettext("Titre de vente");?> <input type="text" ></br>
				<button type="button"><?php echo gettext("Chercher");?></button>
						
			
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
				<?php echo gettext("Chercher des utilisateurs");?></br>
				<?php echo gettext("Identifiant");?> <input type="text" ></br>
				<?php echo gettext("Nom");?> <input type="text" ></br>
				<?php echo gettext("Prenom");?> <input type="text" ></br>
				<?php echo gettext("Adresse mail");?> <input type="text" ></br>
				<button type="button"><?php echo gettext("Chercher");?></button>
				<button type="button"><?php echo gettext("Créer un utilisateur");?></button>
		
			
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
<?php 
	include "piedPage.php";
?>