
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title> Filtro de Logs </title>
    <link type= "text/css" rel=stylesheet href="../_css/bootstrap3.css">
    <link type= "text/css" rel=stylesheet href="../_css/milligram.min.css">
    <?php include ('../_view/navbar-adm.php')?>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4"></div>
            <div class="col-md-12">
                <form class="form-inline form-filtro" method="POST" action="filtro-log.php">
                    <div class="form-group">
                        <label class="sr-only" for="filtro-data-inicial">Data inicial</label>
                        <input type="date" class="form-control" id="filtro-data-inicial" name="filtro-data-inicial">

                        <label class="sr-only" for="filtro-data-final">Data final</label>
                        <input type="date" class="form-control" id="filtro-data-final" name="filtro-data-final">

                        <button style="background-color: #35cebe" type="submit" class="btn btn-default">Filtrar</button>
                        <button type="reset" class="btn btn-default">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
