<?php
//include_once( "../_model/seguranca.php" );
$numQuestao = 0;
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
        <?php include('navbar-adm.php') ?>
    </div>

    <div id="menuLateralQuestoes" class=" card col-md-3 col-lg-3 col-sm-12">
        <h3>Aguardando aprovação</h3>
        <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#item1">Questão 1</a>
            <a class="list-group-item list-group-item-action" href="#item2">Questão 2</a>
            <a class="list-group-item list-group-item-action" href="#item3">Questão 3</a>
            <a class="list-group-item list-group-item-action" href="#item4">Questão 4</a>

        </div>
    </div>


    <div id="questaoSubmetida">
        <h4><?php echo "Questão $numQuestao"?></h4>
        <div id="enunciado">
            <textarea class="form-control" id="just"  rows="5" placeholder="Enunciado da questão" style="border: solid"></textarea>
        </div>
        <div id="justificativa">
            <textarea class="form-control" id="enuc" rows="5" placeholder="Justificativa"></textarea>
        </div>
        <div id="alternativas" >
            <input type="text" class="form-control" id="a" placeholder="alternativa a">
            <input type="text" class="form-control" id="b" placeholder="alternativa b">
            <input type="text" class="form-control" id="c" placeholder="alternativa c">
            <input type="text" class="form-control" id="d" placeholder="alternativa d">
            <input type="text" class="form-control" id="e" placeholder="alternativa e">
        </div>



        <div id="botoes">
            <button type="button" class="btn btn-primary">Recusar</button> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-primary">Aprovar</button>
        </div>
    </div>


</body>
</html>