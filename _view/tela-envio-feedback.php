<?php
	include_once( "../_model/seguranca.php" );
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar Feedback</title>
  
    <link rel="stylesheet" type="text/css" href="../_css/milligram.min.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">
    <link rel="stylesheet" type="text/css" href="../_css/tela-inicial-adm.css">
</head>
<body style="background-color:#606c76">
        <div class="navbar">
        	<?php include('navbar-usuario.php') ?>
        </div>
        <br><br>
        <div class="container-fluid">
            <div class="row">                               
					<div id="coluna1" class="col-md-2 col-sm-2 col-lg-2"></div>
					<div id="coluna2" class="col-md-4 col-sm-4 col-lg-4"  style="background-color:#FFFFFF">
                    <br><br><br>
						<p>Envie-nos um feedback sobre a plataforma.</p>
						<p>
							<span></span>Feira de Santana, BR</p>
						<p>
							<span></span>Telefone: +55 75 10101010101</p>
						
					</div>
					<div id="coluna3" class="col-md-4 col-sm-5 col-lg4"  style="background-color:#FFFFFF">
                    <br><br><br>
						<form action="_controller/enviofeedback.php" method="POST">
                            <div id="teste" class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email@example.com" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Comente" rows="5"></textarea>
                            <br>
                           
                             <button class="button" type="submit">Enviar</button>                             
                            </div>
                        </form>
					</div>                
            </div>
        </div>
</body>
</html>