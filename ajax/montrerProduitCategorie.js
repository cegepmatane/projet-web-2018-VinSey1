
function montrerProduitCategorie(categorie){

	console.log("bouton "+categorie);

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		console.log("alerte");
		if ( this.readyState == 4 && this.status == 200){
			console.log("clic  "+categorie);
			document.getElementById('ensemble-produits').innerHTML = this.responseText;
		}
		
	};
	
	xmlhttp.open("GET", "/ajax/listerObjet.php?categorie="+categorie, true);
	xmlhttp.send();

}