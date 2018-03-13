


<?php 				
	$objetDAO = new ObjetDAO();				
	$listeobjet = $objetDAO->obtenirListeObjet();
	$literie = $objetDAO->compterObjetParCategorie(1);
	
					
					
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
						show: false,
						min: 80,
						max: 600,
						inRange: {
							colorLightness: [0, 1]
						}
					},
					series : [
						{
							name:'Categorie',
							type:'pie',
							radius : '55%',
							center: ['50%', '50%'],
							data:[
								{value:335, name:'Literie'},
								{value:310, name:'Ustensiles'},
								{value:274, name:'Ménage'},
								{value:235, name:'Livres'},
								{value:400, name:'Fournitures de bureau'},
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
									shadowBlur: 200,
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
						text: 'Nombre de connexions par jour',
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
						min: 10,
						max: 400,
						inRange: {
							colorLightness: [0, 1]
						}
					},
					xAxis: {
						type: 'category',
						data: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim']
					},
					yAxis: {
						type: 'value'
					},
					series: [{
						data: [120, 200, 150, 80, 70, 110, 130],
						type: 'bar'
					}]
				};
				myChart.setOption(option);
			</script>
			<div id="chart3" style="width: 500px; height: 350px;"></div>
			<script type="text/javascript">
				var myChart = echarts.init(document.getElementById('chart3'));
				var option = {
					
						tooltip : {
							formatter: "{a} <br/>{b} : {c}%"
						},
						toolbox: {
							feature: {
								restore: {},
								saveAsImage: {}
							}
						},
						series: [
							{
								name: 'Performance',
								type: 'gauge',
								detail: {formatter:'{value}%'},
								data: [{value: 50, name: 'Performance'}]
							}
						]
					};

					setInterval(function () {
							option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
							myChart.setOption(option, true);
							},2000);
				myChart.setOption(option);
			</script>
		</div>