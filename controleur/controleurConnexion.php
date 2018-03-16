<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	
	if ( isset($_POST['actionFormulaire'])){
		
		$utilisateurDAO = new UtilisateurDAO();
		$utilisateurDAO->recupererInformationConnexion($_POST['pseudonyme']);
		$isPasswordCorrect = password_verify($_POST['motdepasse'], $resultat['motdepasse']);
		
		if (!$resultat)

		{

			echo 'Mauvais identifiant ou mot de passe !';

		}

		else

			{

				if ($isPasswordCorrect) {

					session_start();

					$_SESSION['id'] = $resultat['id_utilisateur'];

					$_SESSION['pseudo'] = $pseudonyme;

					echo 'Vous êtes connecté !';

				}

				else {

					echo 'Mauvais identifiant ou mot de passe !';

				}

			}
	}
	
?>
		