<?php
	include_once( "../_model/seguranca.php" );
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerencia de Conta ADM</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">
    <link rel="stylesheet" type="text/css" href="../_css/gerencia-conta.css">

</head>

<body>
<div>
     <?php 
     /*Então, aqui deve aparecer um if para saber qual usuário está uzando a página
     dependendo de quem seja deve ser alterada a navbar de usuário, adm e moderador. */
		if($_SESSION['privilegio'] == 'A'){
       		include('navbar-adm.php');
		}else if($_SESSION['privilegio'] == 'M'){
			include('navbar-adm.php');
		}else if($_SESSION['privilegio'] == 'N'){
			include('navbar-usuario.php');
		}
    ?>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12">

                <div class="col-md-6 col-lg-6">
                   
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="form-group">
                    <div>
                        <img src="http://via.placeholder.com/50x50" alt="profile photo" class="circle float-left profile-photo" width="200" height="auto">
                    </div>

                    <label for="exampleFormControlFile1">Escolha uma foto</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">

            </div>

        </div>
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12">

            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">

            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <button type="button" class="btn btn-outline-secondary">Submeter</button>
            </div>

        </div>

    </div>

</body>

</html>