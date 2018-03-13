<?php 

	$language = "en_US";
	putenv("LANG=".$language);
	setlocale(LC_MESSAGES, $language);
	
	$chemin = $_SERVER["DOCUMENT_ROOT"]."/Locale";
	echo $chemin;
	
	$domain = "messages";
	bindtextdomain($domain, $chemin );
	textdomain($domain);


	
	echo gettext("Prix"); 
	
	
?>