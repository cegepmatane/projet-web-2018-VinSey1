<?php
	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	require_once OBJET_DAO;
	require_once OBJET_MODELE;
	include_once "../../detailsObjet.php";

	$utilisateurDAO = new UtilisateurDAO();

	$utilisateur = $utilisateurDAO->chercherParIdentifiant($_SESSION['id']);
	
	

	if ( isset($_GET['Modifier'])){
		formulaireModification($utilisateur);
	} 
	
	else if ( isset($_GET['Modification'])){

		$utilisateurModifie = new Utilisateur();

		$utilisateurModifie->setIdUtilisateur($_POST['idUtilisateur']);
		$utilisateurModifie->setNom($_POST['nom']);
		$utilisateurModifie->setPrenom($_POST['prenom']);
		$utilisateurModifie->setPseudonyme($_POST['pseudonyme']);
		$utilisateurModifie->setEmail($_POST['email']);
		$utilisateurModifie->setAdresse($_POST['adresse']);
		$utilisateurModifie->setCodepostal($_POST['codepostal']);
		$utilisateurModifie->setPays($_POST['pays']);			
		$utilisateurModifie->setVille($_POST['ville']);
		$utilisateurModifie->setAge($_POST['anneenaissance']);
		$utilisateurModifie->setTelephone($_POST['telephone']);	
		$utilisateurModifie->setNbventes($_POST['nbventes']);	
		$utilisateurModifie->setNbachats($_POST['nbachats']);	
		$utilisateurModifie->setRole($_POST['role']);	
		$utilisateurModifie->setIllustration($_POST['illustration']);	
		$utilisateurModifie->setMotDePasse($_POST['motdepasse']);
		
		if ($utilisateurModifie->estValide()){
				
			$utilisateurDAO = new UtilisateurDAO();
			
			$utilisateurDAO->modifierUtilisateur($utilisateurModifie);

			afficherInformations($utilisateurModifie);

		} else {
			formulaireModification($utilisateurModifie);
		}
	}
	
	else{
		afficherInformations($utilisateur);
	}
	
if (isset($_GET['Ventes'])){
		afficherVentes($utilisateur);	
	}
	
	


?>