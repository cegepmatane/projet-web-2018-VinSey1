function montrerProduitCategorie(categorie){

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechage = function(){
		
		if ( this.readyState == 4 && this.status == 200){
			
		}
		
	};
	
	xmlhttp.open("GET", "montrerProduitCategorie.php?q="+categorie, true);
	xmlhttp.send();

}