<?php
function verifAlpha($valeur){
    preg_match("/([^A-Za-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ .\-])+$/i",$valeur, $resultat);
    if(!empty($resultat)){
		return false;
	}
    return true;
}

function verifAlphaNum($valeur){
    preg_match("/([^A-Za-z0-9ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ .\-])+$/i",$valeur, $resultat);
	if(!empty($resultat)){
        return false;
	}
    return true;
}
?>