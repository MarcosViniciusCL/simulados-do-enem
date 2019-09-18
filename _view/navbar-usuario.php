<?php
	include_once( "../_model/seguranca.php" );
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Navbar-USU</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>

    <nav class="navbar navbar-default">
        <div id="nav1" class="container-fluid">
            <!-- Toggle que faz com que apareçam as opções em celular e telas menores. -->
            <div class="navbar-header">
               
              
                    <img src="../_images/40abf4f8-b64d-4c79-8e17-7c377a3554db.png" height="150" width="150" style="margin-top:-25px; margin-bottom:-45px;">
               
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dados-da-barra" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            </div>
            <!-- Objetos que estarão no toogle quando ele abrir. -->
            <div class="collapse navbar-collapse">

                <!--Navbar com dados à direita-->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <img src="http://via.placeholder.com/50x50" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
                        </a>
                    </li>
                    <li>
                        <div class="username">
                            <h4><?php echo $logado ?></h4>
                            <p>Bem Vindo</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- barra da parte de baixo com os dados dos links-->
        <div class="container-fluid">
           
            <div id="dados-da-barra">
                <ul class="nav navbar-nav">
                <li>
                <a href="paineldeusuario.php">Pagina inicial <span class="sr-only">(current)</span> </a>
            </li>
            <li>
                <a href="escolher-tipo-simulado.php">Realizar simulado </a>
            </li>
            <li>
                <a href="tela-cadastrar-questao-nao-oficial.php">Submeter questão</a>
            </li>
            <li>
                <a href="tela-envio-feedback.php">Dar feedbacks</a>
            </li>
            <li>
                <a href="gerencia-de-conta.php">Minha conta</a>
            </li>
            <!--
            <li>
                <a href="tela-de-ajuda.php">Ajuda</a>
            </li>
            -->
            <li>
                <a href="../_controller/logout.php">Sair da conta</a>
            </li>
                </ul>

                
            </div>

        </div>

        </div>
        <!-- /.container-fluid -->
    </nav>

    <script src="../_js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../_js/bootstrap.js"></script>
    <script>
        $(function () {

            $('.navbar-toggle').on('click.bs.collapse', function (e) {
                if ($(this).data('label-expanded')) {
                    var $toggleLabel = $(this).find('.navbar-toggle-label')

                    if ($(this).hasClass('collapsed')) {
                        // Save current label
                        $(this).data('label-collapsed', $toggleLabel.text())
                        // Set new text
                        $toggleLabel.text($(this).data('label-expanded'))
                    }
                    else {
                        $toggleLabel.text($(this).data('label-collapsed'))
                    }
                }
            })
        });
    </script>
</body>

</html>
