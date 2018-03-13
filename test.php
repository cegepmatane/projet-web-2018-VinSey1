<?php 

	$language = "en_CA";
	putenv("LANG=".$language);
	setlocale(LC_ALL, $language);
	
	$domain = "messages";
	bindtextdomain($domain, $_SERVER["DOCUMENT_ROOT"]."/Locale");
	textdomain($domain);

echo gettext("Prix"); ?>