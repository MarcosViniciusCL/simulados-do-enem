<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 18/01/2018
 * Time: 14:05
 */
require_once ("../_controller/Controllerdados.php");

$controller = Controllerdados::getInstance();
$result = $controller->buscarDenuncia();
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
    <title> Usuários encontrados </title>
    <link type= "text/css" rel=stylesheet href="../_css/bootstrap3.css">
    <link type= "text/css" rel=stylesheet href="../_css/milligram.min.css">
    <?php include ('navbar-adm.php')?>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div id="table-responsive">
                <table class="table">
                    <tbody>
                    <?php
                    $i = 0;
                    while ($i<$tamanho) { ?>
                        <tr>
                            <td><?php echo "Data: ".$result[$i]->getData(); ?> &nbsp;</td>
                            <td><?php echo "ID Usuário: ".$result[$i]->getIdUsuario(); ?> &nbsp;</td>
                            <td><?php echo "ID da Questão Denunciada: ".$result[$i]->getIdQuestao(); ?> &nbsp;</td>
                        </tr>
                    <?php $i++;
                    }
                    ?>
                    <tbody>
                </table>
            </div>
        </div>
        <div class="col-md-2 col-lg-2"></div>
    </div>
</div>

</body>
</html>
