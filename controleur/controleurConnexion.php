<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	
	if ( isset($_POST['actionFormulaire'])){
		
		$pseudonyme = $_POST['pseudonyme'];
		$utilisateurDAO = new UtilisateurDAO();
		$resultat = $utilisateurDAO->recupererInformationConnexion($pseudonyme);
		//var_dump($resulat);
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
					$expire = time() + 365*24*3600;
					setcookie('pseudo', $_SESSION['pseudonyme'], $expire); 
									
					var_dump($_SESSION);
				}
				else {

					echo 'Mauvais identifiant ou mot de passe !';

				}
			}
	}
	
?>
		