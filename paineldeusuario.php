<?php
	include_once( "_model/seguranca.php" );
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>S.O.S ENEM</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
			
		<link href="_css/ig-canais.css" rel="stylesheet" type="text/css">
		<header> 
			<link rel="stylesheet" type="text/css" href="_css/bootstrap3.css">
			<!-- Google Fonts -->
			<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
			<!-- Template Styles -->
			<link rel="stylesheet" href="_css/font-awesome.min.css">
	
			<!-- CSS Reset -->
			<link rel="stylesheet" href="_css/normalize.css">
	
			<!-- Milligram CSS minified -->
			<link rel="stylesheet" href="_css/milligram.min.css">
	
			<!-- Main Styles -->
   			<link rel="stylesheet" href="_css/styles.css">
	    	
		</header>

	</head>

	<body style="background-color:#E4E4E4">	

		<div class="navbar">
        	<?php include('navbar-usuario.php') ?>
		</div>

		<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-lg-3 col-sm-12">
					<div style="background-color:white; width:305px; height:50px">
						<p class="h1 font-weight-bold" style="text-align:center;  margin-top:0px">Ranking</p>
					</div>
						<div class="table-responsive" style="margin-top: 15px">
							<table class="table table-striped table-bordered table-hover table-condensed">
							  <thead>
							    <tr class="active">
							      <th>Nome</th>
							      <th>Pontuação</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th>Indio</th>
							      <td>2579</td>
							    </tr>
							     <tr>
							      <th>Afogado</th>
							      <td>2347</td>
							    </tr>
							     <tr>
							      <th>Chará</th>
							      <td>2230</td>
							    </tr>
							     <tr>
							      <th>Marcondes</th>
							      <td>2185</td>
							    </tr>
							     <tr>
							      <th>Rodrigo</th>
							      <td>2179</td>
							    </tr>
							     <tr>
							      <th>Allan</th>
							      <td>2079</td>
							    </tr>
							     <tr>
							      <th>Alisson</th>
							      <td>1996</td>
							    </tr>
							     <tr>
							      <th>Igor</th>
							      <td>1899</td>
							    </tr>
							     <tr>
							      <th>Ex Gerente</th>
							      <td>1856</td>
							    </tr>
							  </tbody>
							</table>
						</div>

					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<div class="card">
						<div class="card-title">
							<h3>Seus Acertos e Erros por Área de Conhecimento</h3>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>
							
					</div>
					<div class="col-md-3 col-lg-3 col-sm-12">
						<input name="botão" type="button" onClick="tela-cadastrar-questao-nao-oficial.php" value="Submeter Uma Questão" style="margin-top: 300px; margin-left: 50px">
					</div>	
				</div>
			</div>	

    	<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12">
					<a class="anchor" name="charts"></a>	
					
					<div class="card">
							<div class="card-title">
								<h3>Sua Taxa  Geral de Erros e Acertos</h3>
							</div>
							<div class="card-block">
								<div class="canvas-wrapper">
									<canvas class="chart" id="pie-chart" height="auto" width="auto"></canvas>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="col-md-6 col-lg-6 col-sm-12">		
					<div class="card">
						<div class="card-title">
							<h3>Sua Quantidade de Provas Realizadas</h3>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>				
				</div>				
			</div>	

			

			<div class="container-fluid">
				<div class="row" style="height: 230px; padding: 0px">
					<div class="col-md-12 col-lg-12 col-sm-12" style="margin-bottom: 0px; padding: 5px">
						<img src="_images/banner.jpg" style="width: 100%; height: 100%">
					</div>					
				</div>		
			</div>	
		</div>
		<script src="_js/chart.min.js"></script>
		<script src="_js/chart-data.js"></script>
		<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
			var chart2 = document.getElementById("bar-chart").getContext("2d");
			window.myBar = new Chart(chart2).Bar(barChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
			var chart4 = document.getElementById("pie-chart").getContext("2d");
			window.myPie = new Chart(chart4).Pie(pieData, {
			responsive: true,
			segmentShowStroke: false
			});
		};
		</script>			
	</body>
</html>