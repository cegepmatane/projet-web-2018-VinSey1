<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/configuration/configuration.dev.php";
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	include "entete.php";
?>
	<!--
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
	    <span id="onglet_informations" onclick="javascript:changer_onglet('informations');" ><?php echo gettext("Informations") ?></span>
	    <span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Ventes") ?></span>
	    <span id="onglet_achats" onclick="javascript:changer_onglet('achats');" ><?php echo gettext("Informations") ?></span>
	    <span id="onglet_avis_recus" onclick="javascript:changer_onglet('avis_recus');" ><?php echo gettext("Avis reçus") ?></span>
	    <span id="onglet_avis_donnes" onclick="javascript:changer_onglet('avis_donnes');" ><?php echo gettext("Avis donnés") ?></span>
    </div>
	-->
	<div>
		<!--<div class="contenu-onglet" id="contenu_onglet_informations">-->
		<img src="<?=$utilisateur->getIllustration();?>" id="image-profil" />
				
		<form action="../../controleur/modifierUtilisateur.php" id="formulaire-modification" method="post">
			<ul>
				<div id = "blocs-formulaire">
					<div id = "bloc-formulaire-1">
						<li>Nom : <input type="text" name="nom" value="<?php echo $utilisateur->getNom(); ?>"/></li>
						<li>Prénom : <input type="text" name="prenom"  value="<?php echo $utilisateur->getPrenom(); ?>"/></li>
						<li>Pseudonyme : <input type="text" name="pseudonyme"  value="<?php echo $utilisateur->getPseudonyme(); ?>"/></li>
						<li>Adresse e-mail : <input type="text" name="email"  value="<?php echo $utilisateur->getEmail(); ?>"/></li>
						<li>Adresse : <input type="text" name="adresse"  value="<?php echo $utilisateur->getAdresse(); ?>"/></li>
						<li>Illustration : <input type="text" name="illustration"  value="<?php echo $utilisateur->getIllustration(); ?>"/></li>
					</div>
					<div id = "bloc-formulaire-2">
						<li>Code postal : <input type="text" name="codepostal"  value="<?php echo $utilisateur->getCodepostal(); ?>"/></li>
						<li>Pays : <input type="text" name="pays"  value="<?php echo $utilisateur->getPays(); ?>"/></li>
						<li>Ville : <input type="text" name="ville"  value="<?php echo $utilisateur->getVille(); ?>"/></li>
						<li>Âge : <input type="text" name="anneenaissance"  value="<?php echo $utilisateur->getAge(); ?>"/></li>
						<li>Téléphone : <input type="text" name="telephone"  value="<?php echo $utilisateur->getTelephone(); ?>"/></li>
						<li>Nombre de vente : <input type="text" name="nbventes"  value="<?php echo $utilisateur->getNbventes(); ?>"/></li>
						<li>Nombre d'achat : <input type="text" name="nbachats"  value="<?php echo $utilisateur->getNbachats(); ?>"/></li>
						<li>Rôle : <input type="text" name="role"  value="<?php echo $utilisateur->getRole(); ?>"/></li>

						<input type="hidden" name="idUtilisateur" value="<?php echo $utilisateur->getIdUtilisateur(); ?>"/>
					</div>
				</div>
				<input id="bouton" type="submit" value="Valider" name="controleur_modification_utilisateur"/>
			</ul>
		</form>
		<form action="../../controleur/supprimerUtilisateur.php" id="formulaire-modification" method="post">
					<input type="hidden" name="idUtilisateur" value="<?php echo $utilisateur->getIdUtilisateur(); ?>"/>
					<input id="bouton" type="submit" value="Supprimer" name="controleur_suppression_utilisateur"/>
		</form>
		
		<!-- <div class="contenu-onglet" id="contenu_onglet_ventes"> -->
		<div class="contenu-profil">
			liste des ventes
		</div>
		<!-- <div class="contenu-onglet" id="contenu_onglet_achats"> -->
		<div class="contenu-profil">	
			liste des achats
		</div>
		<!-- <div class="contenu-onglet" id="contenu_onglet_avis_recus"> -->
		<div class="contenu-profil">	
			liste des avis reçus
		</div>
		<!-- <div class="contenu-onglet" id="contenu_onglet_avis_donnes"> -->
		<div class="contenu-profil">
			liste des avis donnes
		</div>
	</div>
	<script type="text/javascript">
		
		var onglet_courant = 'informations';
		changer_onglet(onglet_courant);
		
	</script>
</body>
</html>