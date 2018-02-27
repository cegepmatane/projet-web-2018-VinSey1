function montrerProduitCategorie(categorie){

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechage = function(){
		
		if ( this.readyState == 4 && this.status == 200){
			document.getElementById('produit-courant').innerHTML = this.responseText;
		}
		
	};
	
	xmlhttp.open("GET", "listerObjet.php?q="+categorie, true);
	xmlhttp.send();

}