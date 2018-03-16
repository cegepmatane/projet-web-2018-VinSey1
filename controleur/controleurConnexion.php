<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	
	if ( isset($_POST['actionFormulaire'])){
		
		$pseudonyme = $_POST['pseudonyme'];
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->recupererInformationConnexion($pseudonyme);
		$isPasswordCorrect = password_verify($_POST['motdepasse'], $resultat['motdepasse']);
		
		if (!$resultat)
		{
			echo 'Pas de résultat';
		}

		else
			{
				if ($isPasswordCorrect) {
					session_start();
					$_SESSION['id'] = $resultat['id_utilisateur'];
					$_SESSION['pseudonyme'] = $pseudonyme;
					echo 'Vous êtes connecté !';
				}
				else {

					echo 'Mauvais identifiant ou mot de passe !';

				}
			}
	}
	
?>
		