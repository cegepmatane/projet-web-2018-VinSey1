


<?php 				
	$objetDAO = new ObjetDAO();				
	$listeobjet = $objetDAO->obtenirListeObjet();
	$utilisateurDAO = new UtilisateurDAO(); 
	
					
					
?>
<div id="chart1" style="width: 500px; height: 350px;"></div>
			<script type="text/javascript">
				var myChart = echarts.init(document.getElementById('chart1'));
				var option = {

					title: {
						text: 'Répartition des objets',
						left: 'center',
						top: 20,
						textStyle: {
							color: '#ccc'
						}
					},

					tooltip : {
						trigger: 'item',
						formatter: "{a} <br/>{b} : {c} ({d}%)"
					},

					visualMap: {
						show:  false,
						min: 1,
						max: 10,
						inRange: {
							colorLightness: [0.2, 1]
						}
					},
					series : [
						{
							name:'Categorie',
							type:'pie',
							radius : '55%',
							center: ['50%', '50%'],
							data:[
								{value:<?php $objetDAO->compterObjetParCategorie(1); ?>, name:'Literie'},
								{value:<?php $objetDAO->compterObjetParCategorie(2); ?>, name:'Cuisine'},
								{value:<?php $objetDAO->compterObjetParCategorie(3); ?>, name:'Livres'},
								{value:<?php $objetDAO->compterObjetParCategorie(4); ?>, name:'Fournitures de Bureau'},
								{value:<?php $objetDAO->compterObjetParCategorie(5); ?>, name:'Autres'},
								
							].sort(function (a, b) { return a.value - b.value; }),
							roseType: 'radius',
							label: {
								normal: {
									textStyle: {
										color: 'rgba(255, 255, 255, 0.3)'
									}
								}
							},
							labelLine: {
								normal: {
									lineStyle: {
										color: 'rgba(255, 255, 255, 0.3)'
									},
									smooth: 0.2,
									length: 10,
									length2: 20
								}
							},
							itemStyle: {
								normal: {
									color: '#c23531',
									
									shadowColor: 'rgba(0, 0, 0, 0.5)'
								}
							},

							animationType: 'scale',
							animationEasing: 'elasticOut',
							animationDelay: function (idx) {
								return Math.random() * 200;
							}
						}
					]
				};
				myChart.setOption(option);
			</script>
			<div id="chart2" style="width: 500px; height: 350px;"></div>
			<script type="text/javascript">
				var myChart = echarts.init(document.getElementById('chart2'));
				var option = {
					
					
					title: {
						text: 'Répartition des années de naissance',
						left: 'center',
						top: 20,
						textStyle: {
							color: '#ccc'
						}
					},

					tooltip : {
						
						formatter: "<br/>{b} : {c} "
					},

					visualMap: {
						show: false,
						min: 1,
						max: 20,
						inRange: {
							colorLightness: [0.2, 1]
						}
					},
					xAxis: {
						type: 'category',
						data: ['1990', '1991', '1992', '1993', '1994', '1995', '1996','1997','1998','1999','2000','2001','2002','2003']
					},
					yAxis: {
						type: 'value'
					},
					series: [{
						data: [{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1990); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1991); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1992); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1993); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1994); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1995); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1996); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1997); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1998); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(1999); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(2000); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(2001); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(2002); ?>},
							{value:<?php $utilisateurDAO->compterUtilisateurParAnneeDeNaissance(2003); ?>},
								],
						type: 'bar'
					}]
				};
				myChart.setOption(option);
			</script>
			
		</div>