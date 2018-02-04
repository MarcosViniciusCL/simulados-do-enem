<?php
	include_once("../_model/segurancaA.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciar conta usuario</title>
    <link rel="stylesheet" type="text/css" href="../_css/gerencia-conta.css">
    
			
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="../_css/milligram.min.css">
	
	<!-- Main Styles -->
    <link rel="stylesheet" href="../_css/tela-inicial-adm.css">
	<link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">

</head>

<body style="background-color:#606c76">

    <div class="navbar">
        <?php
            include('navbar-adm.php');
        ?>
    </div>
    <div class="container-fluid">
        <div class="row grid-responsive">
            <div class="col-sm-0 col-md-3 col-lg-3 ">
                <div id="sidebar" class="column">
                    
                </div>
            </div>
            
            <div class=" card col-sm-12 col-md-7 col-lg-7">
            <br><br><br>
                <form method="POST" action="../_controller/buscar_usuarios.php">
                    <div class="form-group">
                                                
                        <div class="col-sm-8 col-md-8 col-lg-8">                
                        <input type="text" name="nome" id="nome" required placeholder="Digite o nome do usuário desejado"</label>
                        </div>
                       
                        <div class="col-sm-4 col-md-4 col-lg-4">                
                
                            <div class="col-sm-6 col-md-6 col-lg-6">                
                                <button type="submit">Procurar Usuário</button>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">                
                                
                            </div>
                        </div>
                    </div>
                </form>
                <br><br><br><br><br>
                
            </div>
            <div class="col-sm-0 col-md-2 col-lg-2">                
                
            </div>

        </div>
    </div>

</body>

</html>