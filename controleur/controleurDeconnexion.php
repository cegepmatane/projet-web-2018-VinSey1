<?php

	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	
	if ( isset($_POST['actionFormulaire'])){
		
		session_destroy();
		?>
		<?php
		<script type='text/javascript'>document.location.replace('index.php');</script>
		
	}
	
	
?>