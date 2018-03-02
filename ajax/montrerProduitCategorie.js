
function montrerProduitCategorie(categorie){

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		if ( this.readyState == 4 && this.status == 200){
			document.getElementById('ensemble-produits').innerHTML = this.responseText;
		}
		
	};
	
	xmlhttp.open("GET", "/ajax/listerObjet.php?categorie="+categorie, true);
	xmlhttp.send();

}
