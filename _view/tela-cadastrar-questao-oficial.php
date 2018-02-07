<?php
	include_once( "../_model/segurancaA.php" );
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<!--<link rel="stylesheet" type="text/css" href="../_css/cadastro.css">-->

	<link href="../_css/uploadfilemulti.css" rel="stylesheet">
	
</head>
<body style="background-color:#606c76">
	<?php 
	include('navbar-adm.php');
	?>	

	<div style="background-color:#606c76" id="cadQuestao" style="margin-top:-20px" class="container-fluid card">			  
	 	<div style="margin-top:10px" class="row">           
            <div class=" card col-sm-12 col-md-12 col-lg-12" >

				<div class=" card col-sm-12 col-md-8 col-lg-8">

					<div class="col-sm-12 col-md-11 col-lg-11">									
						<form>
							<textarea class="form-control" id="comments" style="margin-top: 10px" name="Enunciado" id="Enunciado" placeholder="Digite aqui o texto da questão." rows="7"></textarea>
							<h4>Se houver imagem no enunciado da questão, selecione-a usando o botão abaixo:</h4>
							<!-- input type="file" accept=".jpeg, .png" accept=".png"  class="form-control-file" id="exampleFormControlFile1"> -->
							<div class="container">
								<div class="jumbotron">
									<button type="button" id="mulitplefileuploader">Importar imagem(s)</button>
								</div>
							</div>
							<h4>Escreva o texto das alternativas da questão, selecione a alternativa cujo a resposta é a resposta correta da questão! Caso a resposta seja uma imagem, escolha a imagem e selecione a correta! </h4>
							<div class="col-md-7 col-lg-7 col-sm-12">
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
							</div>
							<div class="col-md1 col-lg-1">
								<div class="input-group">
									A.<input name="imgcorreta" type="radio"><br><br>
								</div>	
								<div class="input-group">
									B.<input name="imgcorreta" type="radio"><br><br>
								</div>
								<div class="input-group">
									C.<input name="imgcorreta" type="radio"><br><br>
								</div>
								<div class="input-group">
									D.<input name="imgcorreta" type="radio"><br><br>
								</div>
								<div class="input-group">
									E.<input name="imgcorreta" type="radio"><br>
								</div>				
							</div>
							<div class="col-md-4 col-lg-4 col-sm-12">
								<div class="input-group">								
									<input name="alternativa a" type="file" accept=".png , .jpeg">			
								</div><!-- /input-group -->	
								<br>
								<div class="input-group">								
									<input name="alternativa b" type="file" accept=".png , .jpeg">				
								</div><!-- /input-group -->	
								<br>
								<div class="input-group">								
									<input name="alternativa c" type="file" accept=".png , .jpeg">				
								</div><!-- /input-group -->	
								<br>
								<div class="input-group">								
									<input name="alternativa d" type="file" accept=".png , .jpeg">				
								</div><!-- /input-group -->	
								<br>
								<div class="input-group">								
									<input name="alternativa e" type="file" accept=".png , .jpeg">				
								</div><!-- /input-group -->	
									
							</div>					
						</form>											
					</div>
					<div class="col-sm-12 col-md-1 col-lg-1">					
					</div>

				</div>
				
				

				<div class="card col-sm-12 col-md-4 col-lg-4">
					<form>
						<div class="form-group">
						
							<h4>Escolha a área de conhecimento da questão</h4>
							
							<div class="input-group">
								<input name="areaconhecimento" type="radio"> Ciências Humanas <br><br>
							</div>
							<div class="input-group">
								<input name="areaconhecimento" type="radio"> Ciências da Natureza <br><br>
							</div>
							<div class="input-group">
								<input name="areaconhecimento" type="radio"> Linguagens e Suas Tecnologias <br><br>
							</div>
							<div class="input-group">
								<input name="areaconhecimento" type="radio"> Matemática e Suas Tecnologias <br><br>
							</div>							

							<h4>Selecione o Ano da Questão Que Está Cadastrando</h4>
							<input type="number" name="points" min="1995" max="2017" step="1" required value="2017">							
														
							<br><br><br><br><br><br><br><br>			
							<button class="button">Enviar Questão</button>
							<button class="button">Cancelar Envio</button>	
						</div>
					</form>
				</div>				            				                
            </div>
		</div>
	</div>

	<div style="background-color:#606c76" id="cadProva" style="margin-top:-20px" class="container-fluid card">			  
	 	<div style="margin-top:10px" class="row">  
			<div class="col-sm-0 col-md-3 col-lg-7">

			</div>   
			<div class="col-sm-12 col-md-7 col-lg-7 card">
				<form>
					<div class="form-group">
						<h4>Escolha uma prova para submeter</h4><br>						
						<input type="file" accept=".txt"  class="form-control-file" id="exampleFormControlFile1">
						<br><br><br><br><br>
						<h4>Escolha o ano da prova que deseja cadastrar</h4>
						<input type="number" name="points" min="1995" max="2017" step="1" value="2017">	
																
						<br><br><br><br><br>			
						<button class="button">Enviar Prova</button>
						<button class="button">Cancelar Envio</button>	
					</div>
				</form>
			</div> 
			<div class="col-sm-0 col-md-2 col-lg-7">

			</div>       
		</div>
	</div>

	<script type="text/javascript" src="../_js/script.js"></script>
	<script language="JavaScript" src="../_js/popper.min.js"></script>
</body>
</html>
<script src="../_js/jquery.fileuploadmulti.min.js"></script>
<script src="../_js/md5.js"></script>
<script type="text/javascript">
$(document).ready(function()
     {

     var settings = {
        url: "../_controller/receberUpload.php",
        method: "POST",
        allowedTypes:"png,jpg,jpeg,gif",
        fileName: "file",
        multiple: true,
        
        onSuccess:function(files,data,xhr)
        {
			document.getElementById("comments").value += "<img src=" + data + ">";
           alert(data);

        },
     
         afterUploadAll:function()
         {
            $(".upload-bar").css("animation-play-state","paused");
            
         },
        onError: function(files,status,errMsg)
        {       
          
            alert(errMsg);
        }

        
     }
     $("#mulitplefileuploader").uploadFile(settings);
        
     });
</script>


