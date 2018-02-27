<?php

function afficherListeErreurFormulaire($listeErreur){
	
	if ( $listeErreur){?>
		<ul>
			<?php
			foreach( $listeErreur as $cle => $erreur){
			?>
				<li> <?php echo $erreur ?></li>
			<?php
			}
			?>
		</ul>
		<?php		
	}
}
	
?>