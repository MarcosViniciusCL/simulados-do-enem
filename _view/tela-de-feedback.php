<?php

require_once ("../_controller/Controllerdados.php");

$controller = Controllerdados::getInstance();
$result = $controller->buscarFeedback();
$tamanho = count($result);
//echo $tamanho;
if($result==false){
    echo "Erro, denúncias não foram encontradas.";
}else{
    //echo " ".$id;
}
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title> Feedbacks </title>
    <link type= "text/css" rel=stylesheet href="../_css/bootstrap3.css">
    <link type= "text/css" rel=stylesheet href="../_css/milligram.min.css">
    <link rel="stylesheet" href="../_css/tela-inicial-adm.css">
    <?php include ('navbar-adm.php')?>

</head>
<body style="background-color:#606c76">
<div class="container-fluid">
    <div class="row">        
        <div class="card col-md-12 col-lg-12 col-sm-12">
            <div id="responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Id Feedback</th>
                        <th>Id Usuário</th>
                        <th>Título Feed</th>
                        <th>Conteúdo Feed</th>
                    </tr>
                    <?php
                   
                    while ($fetch = pg_fetch_row($result)) { ?>
                        <tr>
                            <td><?php echo $fetch[0]; ?> &nbsp;</td>
                            <td><?php echo $fetch[1]; ?> &nbsp;</td>
                            <td><?php echo $fetch[3]; ?> &nbsp;</td>
                            <td><?php echo $fetch[2]; ?> &nbsp;</td>
                           
                            
                        </tr>
                    <?php 
                    }
                    ?>
                    <tbody>
                </table>
            </div>
        </div>
       
    </div>
</div>

</body>
</html>
