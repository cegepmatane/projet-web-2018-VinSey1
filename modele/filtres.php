<?php
function verifAlpha($valeur){
    preg_match("~^([\p{L}-\s']+)$~ui",$valeur, $resultat);
    if(!empty($resultat)){
		return false;
	}
    return true;
}

function verifAlphaNum($valeur){
    preg_match("~^([\p{L}-\s'0-9]+)$~ui",$valeur, $resultat);
	if(!empty($resultat)){
        return false;
	}
    return true;
}
?>