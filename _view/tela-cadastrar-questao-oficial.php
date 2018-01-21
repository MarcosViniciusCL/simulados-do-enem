<?php
	include_once( "../_model/segurancaA.php" );
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<title>Cadastrar questão oficial</title>
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
<body style="background-color:#606c76">
	<?php 
	include('navbar-adm.php');
	?>	
	 <div style="margin-top:-20px" class="container-fluid card">			  
	 	<div style="margin-top:10px" class="row">           
            <div class=" card col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-12 col-md-7 col-lg-7">									
					<form>
						<textarea class="form-control" id="comments" style="margin-top: 10px" name="Enunciado" placeholder="Digite aqui o texto da questão." rows="7"></textarea>
						<h4>Se houver imagem no enunciado da questão, selecione-a usando o botão abaixo:</h4>
						<input type="file" accept=".jpeg, .png" accept=".png"  class="form-control-file" id="exampleFormControlFile1">
						<h4>Escreva o texto das alternativas da questão, selecione a alternativa cujo a resposta é a resposta correta da questão!</h4>
						<div class="input-group">																		
							<span class="input-group-addon">
								A.<input name="correta" type="radio" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->

						<div class="input-group">
							<span class="input-group-addon">
								B.<input name="correta" type="radio" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->

						<div class="input-group">
							<span class="input-group-addon">
								C.<input name="correta" type="radio" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->

						<div class="input-group">
							<span class="input-group-addon">
								D.<input name="correta" type="radio" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">
						</div><!-- /input-group -->

						<div class="input-group">
							<span class="input-group-addon">
								E.<input name="correta" type="radio" aria-label="...">
							</span>
							<input type="text" class="form-control" aria-label="...">

						</div><!-- /input-group -->						

					</form>
											
				</div>
				
				<div class="col-sm-12 col-md-1 col-lg-1">
					
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<form>
						<div class="form-group">
						<h4>Escolha uma prova para submeter</h4>
							<br>
							<input type="file" accept=".txt"  class="form-control-file" id="exampleFormControlFile1">
							<br><br><br><br><br>
							<h4>Escolha o ano da prova que deseja cadastrar</h4>
							<input type="number" name="points" min="1995" max="2017" step="1" value="2017">	
							<h4>Escolha a área de conhecimento da questão</h4>
							<ul class="nav navbar-nav navbar-left">

								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Área de conhecimento
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Ciências Humanas</a>
										</li>
										<li>
											<a href="#">Ciências da Natureza</a>
										</li>                                                     
										
										<li>
											<a href="#">Matemática</a>
											
										</li>
										<li>
											<a href="#">Linguagens</a>
										</li>
									</ul>
								</li>
							</ul>
														
							<br><br><br><br><br>			
							<button class="button">Enviar Questão</button>
							<button class="button">Cancelar Envio</button>	
						</div>
					</form>
				</div>				            				                
            </div>
           
		</div>
    
	</div>

</body>
</html>