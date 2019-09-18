<?php
include_once( "../_model/segurancaA.php" );
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar questão não oficial</title>
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
<?php
include('navbar-adm.php');
?>
<div class="container-fluid">


    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 ">

        </div>

        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="col-sm-3 col-md-2 col-lg-2">

            </div>
            <div class="col-sm-3 col-md-8 col-lg-8">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Escolha uma prova para submeter</label>

                        <input type="file" class="form-control-file" id="exampleFormControlFile1">


                        <div class="col-sm-3 col-md-3 col-lg-3">

                        </div>

                        </div>

                    <button type="button" class="btn btn-primary">Submeter questão</button>
                        <button class="button">Cancelar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3 col-md-2 col-lg-2">

            </div>



        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">


        </div>
    </div>

</div>
</body>
</html>