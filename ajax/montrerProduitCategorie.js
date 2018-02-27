function montrerProduitCategorie(categorie){

	console.log("clic  "+categorie);

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechage = function(){
		
		if ( this.readyState == 4 && this.status == 200){
			document.getElementById('ensemble-produits').innerHTML = this.responseText;
		}
		
	};
	
	xmlhttp.open("GET", "listerObjet.php?categorie="+categorie, true);
	xmlhttp.send();

}