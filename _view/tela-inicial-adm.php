<?php
	//include_once( "../_model/segurancaA.php" );
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="utf-8">
	<title>Tela Inicial Adm</title>
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	<link rel="stylesheet" href="../_css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	<link rel="stylesheet" href="../_css/normalize.css">
	
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="../_css/milligram.min.css">
	
	<!-- Main Styles -->
    <link rel="stylesheet" href="../_css/tela-inicial-adm.css">		
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">	
</head>

<body>
	
	<div class="principa-adm">
		<?php include('navbar-adm.php') ?>
	</div>
        
	<div class="container-fluid">
        <div class="row">
            <div class=" card col-md-3 col-lg-3 col-sm-12">
				<h3>Opções de navegação</h3>
				<div id="list-example" class="list-group">
					<a class="list-group-item list-group-item-action" href="#item1">Início</a>
					<a class="list-group-item list-group-item-action" href="#item2">Gráficos de usuários cadastrados</a>
					<a class="list-group-item list-group-item-action" href="#item3">Gráficos de questões respondidas</a>
					<a class="list-group-item list-group-item-action" href="#item4">Notificações de usuários</a>
				</div>                   
        	</div>
            
            <div  style="background-color:#606c76" class="col-md-9 col-lg-9 col-sm-12">
				<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

					<div id="item1" class="card">
						<div class="large-card">
							<h1>Olá administrador!</h1>
							<p class="text-large">Nesta página você pode ter acesso aos gráficos e informações 
								referentes ao uso do sistema.</p>
						
						</div>
					</div>
					
					
					<h5 style="color:#35cebe">Gráficos de uso do Sistema</h5><a class="anchor" name="graficos"></a>
					<div id="item2" class="card">
							<div class="card-title">
								<h2>Quantidade de Usuários cadastrados</h2>
							</div>
							<div class="card-block">
								<div class="canvas-wrapper">
									<canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
								</div>
							</div>
						</div>
					
					<div id="item3" class="card">
							<div class="card-title">
								<h2>Quantidade de questões respondidas</h2>
							</div>
							<div class="card-block">
								<div class="canvas-wrapper">
									<canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
								</div>
							</div>
						</div>
				


					<div id="item4" class="card">
							<div class="card-title">
								<h2 class="float-left">Notificações</h2>
								<div class="badge background-primary float-right">36</div>
								<div class="clearfix"></div>
							</div>
							<div class="card-block">
								<div class="mt-1">
									<img src="http://via.placeholder.com/45x45" alt="profile photo" class="circle float-left profile-photo" width="45" height="auto">
									<div class="float-left ml-1">
										<p class="m-0"><strong>Jane Donovan</strong> <span class="text-muted">uploaded a new photo</span></p>
										<p class="text-small text-muted">30 minutes ago</p>
									</div>
									<div class="clearfix"></div>
									<hr class="m-0 mb-2" />
								</div>
								<div class="mt-1">
									<img src="http://via.placeholder.com/45x45" alt="profile photo" class="circle float-left profile-photo" width="45" height="auto">
									<div class="float-left ml-1">
										<p class="m-0"><strong>Sam Davidson</strong> <span class="text-muted">just replied to your message</span></p>
										<p class="text-small text-muted">12 hours ago</p>
									</div>
									<div class="clearfix"></div>
									<hr class="m-0 mb-2" />
								</div>
								<div class="mt-1">
									<img src="http://via.placeholder.com/45x45" alt="profile photo" class="circle float-left profile-photo" width="45" height="auto">
									<div class="float-left ml-1">
										<p class="m-0"><strong>Kelly Johnson</strong> <span class="text-muted">changed her status</span></p>
										<p class="text-small text-muted">2 days ago</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-title">
								<h3>Sample Form</h3>
							</div>
							<div class="card-block">
								<form>
									<fieldset>
										<label for="nameField">Name</label>
											<input type="text" placeholder="Jane Donovan" id="nameField">
										<label for="ageRangeField">Age Range</label>
										<select id="ageRangeField">
											<option value="0-13">0-13</option>
											<option value="14-17">14-17</option>
											<option value="18-23">18-23</option>
											<option value="24+">24+</option>
										</select>
										<label for="commentField">Comment</label>
										<textarea placeholder="Hi Jane…" id="commentField"></textarea>
										<div class="float-right">
											<input type="checkbox" id="confirmField">
											<label class="label-inline" for="confirmField">Send a copy to yourself</label>
										</div>
										<input class="button-primary" type="submit" value="Send">
									</fieldset>
								</form>
							</div>
						</div>



						<!-- Default Button -->
						<a class="button" href="#">Default Button</a>
						
						<!-- Outlined Button -->
						<button class="button button-outline">Outlined Button</button>
						
						<!-- Clear Button -->
						<input class="button button-clear" type="submit" value="Clear Button">

						<div class="card">
							<div class="card-title">
								<h3>Current Members</h3>
							</div>
							<div class="card-block">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Role</th>
											<th>Age</th>
											<th>Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Jane Donovan</td>
											<td>UI Developer</td>
											<td>23</td>
											<td>Philadelphia, PA</td>
										</tr>
										<tr>
											<td>Jonathan Smith</td>
											<td>Designer</td>
											<td>30</td>
											<td>London, UK</td>
										</tr>
										<tr>
											<td>Kelly Johnson</td>
											<td>UX Developer</td>
											<td>25</td>
											<td>Los Angeles, CA</td>
										</tr>
										<tr>
											<td>Sam Davidson</td>
											<td>Programmer</td>
											<td>28</td>
											<td>Philadelphia, PA</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

	<!--aqui termina a div da class row do bootstrap-->
                      
            	</div>
     		</div>

		</div>
	</div>
	
	
	<script src="../_js/chart.min.js"></script>
	<script src="../_js/chart-data.js"></script>

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
		
	};
	</script>			

</body>
</html> 