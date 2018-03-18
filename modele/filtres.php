<?php
function verifAlpha($valeur){
    preg_match("/([^A-Za-z .\-])+$/i",$valeur, $resultat);
    if(!empty($resultat)){
		return false;
	}
    return true;
}

function verifAlphaNum($valeur){
    preg_match("/([^A-Za-z0-9 .\-])+$/i",$valeur, $resultat);
	if(!empty($resultat)){
        return false;
	}
    return true;
}
?>