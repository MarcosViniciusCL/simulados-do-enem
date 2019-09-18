
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Escolha o tipo de simulado</title>
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="../_css/milligram.min.css">
	
	<!-- Main Styles -->
    <link rel="stylesheet" href="../_css/tela-inicial-adm.css">		
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
	
</head>
<body>
	<?php
		include('navbar-usuario.php');
	?>
	
	<div class="container-fluid">		
		<div class="row">
			<div class="col-md-5 col-lg-5">

			</div>
			<div class="col-md-4 col-lg-4">
				<ul style="list-style: none">
					<br><br><br>
					<li>
                        <button type="button" data-toggle="modal" data-target="#modalEdicAnt">Edições anteriores</button>
					</li>	

					<li>
                        <button type="button" data-toggle="modal" data-target="#modalAreaEsp">Áreas específicas</button>
					</li>
					<li>
						<button type="button" onclick="abrirProva(3, 0)">Questões oficiais</button>
					</li>
									
					<li>					
						<button type="button" onclick="abrirProva(4, 0)">Questões não oficiais</button>
					</li>
					
					<li>
						<button type="button" onclick="abrirProva(5, 0)">Questões mistas <br>(Oficiais e não oficiais)</button>
					</li>
				</ul>

                <!-- Todos os modal necessários são descritos aqui-->

                <!-- Modal edições anteriores-->
                <div id="modalEdicAnt" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Selecione o ano da prova do ENEM</h4>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Ano da prova
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2017)">2017</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2016)">2016</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2015)">2015</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2014)">2014</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2013)">2013</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2012)">2012</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2011)">2011</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal areas especificas-->
                <div id="modalAreaEsp" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Selecione uma área especifica</h4>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Área do conhecimento
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 1)">Ciências Humanas e suas Tecnologias</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 2)">Ciências da Natureza e suas Tecnologias</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 3)">Linguagens</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="abrirProva(1, 4)">Matemática e suas Tecnologias</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>

                    </div>
                </div>

			</div>
		
			<div class="col-md-3 col-lg-3">
								
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="../_js/chamarSelecao.js"></script>
	<script type="text/javascript" src="../_js/jquery.min.js"></script>
	<script type="text/javascript">
		function abrirProva(tipo_q, ano_or_tipo){
			window.location.href = "../_view/simulado.php?tipoProva="+tipo_q+"&anoOrArea="+ano_or_tipo;
			/*$.ajax({
				url: "../_controller/solicitarProva.php",
				type: 'post',
				data: {tipoProva: obj}
			}).done(function () {
				window.location.href = "../_view/simulado.php";
			});*/
		}
	</script>
</body>
</html>