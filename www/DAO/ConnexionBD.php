<?php

class ConnexionBD{
	
	private $PDO;
	

	function getConnection(){
		
		return $this->PDO;
	}

	
	function __construct(){
		/*
		echo ('mysql:host='.BD_HOTE.'
								  ; port='.BD_PORT.'
								  ;dbname='.BD_NOM.'
								  ,'.BD_UTILISATEUR.', '.BD_MDP);
		
		echo('mysql:host=localhost; port=3307;dbname=survie_etudiante', 'root', '');
		*/
		try{
			
			$this->PDO = new PDO('mysql:host='.BD_HOTE.
								 ';port='.BD_PORT.
								 ';dbname='.BD_NOM
								 ,BD_UTILISATEUR
								 ,BD_MDP);
								  
		
			//$this->PDO = new PDO('mysql:host=localhost; port=3307;dbname=survie_etudiante', 'root', '');
		}
		catch (PDOException $e){
			echo ($e->getMessage());
		}
		
		
		
		
	}

}


?>