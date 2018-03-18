<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;

	if ( isset($_POST['actionFormulaire'])){

		$pseudonyme = $_POST['pseudonyme'];
		$utilisateurDAO = new UtilisateurDAO();
		$resultat = $utilisateurDAO->recupererInformationConnexion($pseudonyme);
		
		$isPasswordCorrect = password_verify($_POST['motdepasse'], $resultat['motdepasse']);
		
		if (!$resultat)
		{
			echo 'Pas de résultat';
		}

		else {
			if ($isPasswordCorrect) {

				

				$_SESSION['id'] = $resultat['id_utilisateur'];
				$_SESSION['pseudonyme'] = $pseudonyme;
				$_SESSION['role'] = $resultat['role'];

				if(($_POST['achat']) != -1){
					?> <script type='text/javascript'>document.location.replace('acheter.php?idObjet=<?php echo $_POST["achat"]?>');</script> <?php
				} else {
					?> <script type='text/javascript'>document.location.replace('index.php');</script> <?php
				}
			} else {

				echo 'Mauvais identifiant ou mot de passe !';

			}
		}
	}
	
?>
		