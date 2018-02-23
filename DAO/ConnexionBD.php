<?php

class ConnexionBD{
	
	private $PDO;
	
	function getConnection(){
		
		return $this->PDO;
	}
	
	function __construct(){

		try{
			
			$this->PDO = new PDO('mysql:host='.BD_HOTE.
								 ';port='.BD_PORT.
								 ';dbname='.BD_NOM.
								 ';charset=utf8'
								 ,BD_UTILISATEUR
								 ,BD_MDP);								  	
		}
		catch (PDOException $e){
			echo ($e->getMessage());
		}		
	}
}


?>