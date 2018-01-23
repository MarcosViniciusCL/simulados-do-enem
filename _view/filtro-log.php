<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 19/01/2018
 * Time: 13:39
 */

include_once("../_model/segurancaA.php");
require_once("../_controller/controllerdados.php");
$dataini = $_POST['filtro-data-inicial'];
$datafim = $_POST['filtro-data-final'];
$controller = Controllerdados::getInstance();
$result = $controller->buscarLogsFiltro($dataini,$datafim);
$tamanho = count($result);
//echo $tamanho;
if($result==false){
    echo "Erro, logs não foram encontrados.";
}else{
    //echo " ".$id;
}
?>
<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title> Filtro de Logs </title>
    <link type= "text/css" rel=stylesheet href="../_css/bootstrap3.css">
    <link type= "text/css" rel=stylesheet href="../_css/milligram.min.css">
    <?php include('../_view/navbar-adm.php') ?>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <?php
                        $i = 0;
                        while ($i<$tamanho) { ?>
                            <tr>
                                <td><?php echo "ID Log: ".$result[$i]->getIdHistorico(); ?> &nbsp;</td>
                                <td><?php echo "ID do Usuário: ".$result[$i]->getIdUser(); ?> &nbsp;</td>
                                <td><?php echo "Descrição: ".$result[$i]->getDescricao(); ?> &nbsp;</td>
                                <td><?php echo "Data do Log: ".$result[$i]->getData(); ?> &nbsp;</td>
                                <td><?php echo "Tipo de Log: ".$result[$i]->getIdAcao(); ?> &nbsp;</td>
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
