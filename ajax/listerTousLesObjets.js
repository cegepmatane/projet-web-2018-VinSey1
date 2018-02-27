
function listerTousLesObjets(){

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){

		if ( this.readyState == 4 && this.status == 200){

			document.getElementById('ensemble-produits').innerHTML = this.responseText;
		}
		
	};
	
	xmlhttp.open("GET", "/ajax/listerTousLesObjets.php", true);
	xmlhttp.send();

}