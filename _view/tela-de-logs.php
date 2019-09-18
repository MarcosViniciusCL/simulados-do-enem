<?php
	include_once( "../_model/segurancaA.php" );
    require_once ("../_controller/Controllerdados.php");
    $controller = Controllerdados::getInstance();
    $result = $controller->buscarLog();
    $tamanho = count($result);
    //echo $tamanho;
    if($result==false){
        echo "Erro, logs não foram encontrados.";
    }else{
        //echo " ".$id;
    }
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title> Logs </title>
    <link type= "text/css" rel=stylesheet href="../_css/bootstrap3.css">
    <link type= "text/css" rel=stylesheet href="../_css/milligram.min.css">
    <?php include ('../_view/navbar-adm.php')?>

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
<div class="col-md-8 col-lg-8 col-sm-8">
    <div class="col-md-8 col-lg-8 col-sm-8"></div>
    <a href="filtrar-logs.php">
    <button style="background-color: #35cebe" type="button" class="btn btn-default">
        Filtrar
    </button>
    </a>
</div>

</body>
</html>