<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 19/01/2018
 * Time: 13:39
 */
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4"></div>
            <div class="col-md-12">
                <form class="form-inline form-filtro">
                    <div class="form-group">
                        <label class="sr-only" for="filtro-data-inicial">Data inicial</label>
                        <input type="date" class="form-control" id="filtro-data-inicial">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="filtro-data-final">Data final</label>
                        <input type="date" class="form-control" id="filtro-data-final">
                    </div>

                    <div class="form-group">
                        <button style="background-color: #35cebe"  type="submit" class="btn btn-default">Filtrar</button>
                        <button type="reset" class="btn btn-default">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
