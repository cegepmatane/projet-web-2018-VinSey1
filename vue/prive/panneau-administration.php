<?php 
	include "entete.php";
	require_once OBJET_DAO;
	require_once OBJET_MODELE;	
	require_once UTILISATEUR_DAO;
	require_once UTILISATEUR_MODELE;
	
	
    /*
    $language = "fr_FR";
    putenv("LANG=" . $language);
    setlocale(LC_ALL, $language);

    $domain = "messages";
    bindtextdomain($domain,"Locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    
    textdomain($domain);
    */

?>
	<script type="text/javascript">
		
		function changer_onglet(name){
		
			document.getElementById('onglet_'+onglet_courant).className = "onglet-non-selectionne";
			document.getElementById('contenu_onglet_'+onglet_courant).style.display = 'none';
			document.getElementById('contenu_onglet_'+name).style.display = 'block';
			document.getElementById('onglet_'+name).className = "onglet-selectionne";
			onglet_courant = name;
		}	
		
	</script>
	<div class="onglet-cliquable">
		<span id="onglet_ventes" onclick="javascript:changer_onglet('ventes');" ><?php echo gettext("Catalogue des Ventes") ?></span>
		<span id="onglet_utilisateurs" onclick="javascript:changer_onglet('utilisateurs');" ><?php echo gettext("Catalogue des utilisateurs") ?></span>
	</div>
	<div id="bloc-stat">
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
	<div>
		<div class="onglets-profil" id="contenu_onglet_ventes">
				<?php 
					$objetDAO = new ObjetDAO();
					$listeobjet = $objetDAO->obtenirListeObjet();
					
				?>
				
				<?php echo gettext("Nombre d'objets : ");?><?php $objetDAO->compterObjet(); ?> </br>
				<?php echo gettext("Chercher des ventes");?></br>
				<?php echo gettext("Identifiant de la vente");?> <input type="text" ></br>
				<?php echo gettext("Identifiant du vendeur");?> <input type="text" ></br>
				<?php echo gettext("Titre de vente");?> <input type="text" ></br>
				<button type="button"><?php echo gettext("Chercher");?></button>
						
			
			<?php foreach($listeobjet as $key => $objet) { ?>		
				<div class="produit-courant">
					<img src="<?=$objet->getIllustration();?>" class="photo-miniature-produit"/>
					<ul>
						<li><?php echo $objet->getTitreDeVente();?></li>
						<li><?php echo gettext("Prix");?>: <?php echo $objet->getPrix();?><?php echo gettext(" $");?></li>
						<li><a href="administration-objet.php?idObjet=<?php echo $objet->getIdObjet(); ?>"> Modifier </a></li>
						<li><a href="administration-objet.php?idObjet=<?php echo $objet->getIdObjet(); ?>"> Supprimer </a></li>
					</ul>
				</div>
			<?php } ?>
		</div>
		<div class="contenu-onglet" id="contenu_onglet_utilisateurs">
				<?php 
					$utilisateurDAO = new UtilisateurDAO();
					$listeutilisateur = $utilisateurDAO->obtenirListeUtilisateur();
				?>
				<?php echo gettext("Nombre d'utilisateurs : ");?><?php $utilisateurDAO->compterUtilisateur(); ?></br>
				<?php echo gettext("Chercher des utilisateurs");?></br>
				<?php echo gettext("Identifiant");?> <input type="text" ></br>
				<?php echo gettext("Nom");?> <input type="text" ></br>
				<?php echo gettext("Prenom");?> <input type="text" ></br>
				<?php echo gettext("Adresse mail");?> <input type="text" ></br>
				<button type="button"><?php echo gettext("Chercher");?></button>
				<button type="button"><?php echo gettext("Créer un utilisateur");?></button>
		
			
			<?php foreach($listeutilisateur as $key => $utilisateur) { ?>
				<div class="produit-courant">
					<ul>
						<li><?php echo gettext("Nom");?>: <?php echo $utilisateur->getNom();?></li>
						<li><?php echo gettext("Prenom");?>: <?php echo $utilisateur->getPrenom();?></li>
						<li><?php echo gettext("Pseudo");?>: <?php echo $utilisateur->getPseudonyme();?></li>
						<li><a href="administration-utilisateur.php?actionNaviguation=modifier&idUtilisateur=<?php echo $utilisateur->getidUtilisateur(); ?>"> Modifier </a></li>
						<li><a href="administration-utilisateur.php?actionNaviguation=supprimer&idUtilisateur=<?php echo $utilisateur->getidUtilisateur(); ?>"> Supprimer </a></li> 
					</ul>
				</div>
			<?php } ?>	
		</div>
		
	</div>
	<script type="text/javascript">
		console.log("hello");
		var onglet_courant = 'ventes';
		changer_onglet(onglet_courant);
		
	</script>
</body>
</html>