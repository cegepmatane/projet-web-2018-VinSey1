<?php 
	include "entete.php";
	require_once UTILISATEUR_CONTROLEUR;
?>

    <form action="administration-utilisateur.php" id="formulaire-creation" method="post">
        <ul>
            <div id = "blocs-formulaire">
                <div id = "bloc-formulaire-1">
                    <li>Nom : <input type="text" name="nom" /></li>
                    <li>Prénom : <input type="text" name="prenom" /></li>
                    <li>Pseudonyme : <input type="text" name="pseudonyme" /></li>
                    <li>Adresse e-mail : <input type="text" name="email" /></li>
                    <li>Adresse : <input type="text" name="adresse" /></li>
					<li>Illustration : <input type="text" name="illustration" /></li>
                </div>	
                <div id = "bloc-formulaire-2">
                    <li>Code postal : <input type="text" name="codepostal" /></li>
                    <li>Pays : <input type="text" name="pays" /></li>
                    <li>Ville : <input type="text" name="ville" /></li>
                    <li>Âge : <input type="text" name="anneenaissance" /></li>
                    <li>Téléphone : <input type="text" name="telephone" /></li>
					<li>Nombre de ventes : <input type="text" name="nbventes" /></li>
					<li>Nombre d'achats : <input type="text" name="nbachats" /></li>
					<li>Role : <input type="text" name="role" /></li>
                </div>	
            </div>
        </ul>
        <input id="bouton" type="submit" value="Ajouter" name="actionFormulaire"/>
    </form>		
</body>
<?php 
	include "piedPage.php";

?>
</html>