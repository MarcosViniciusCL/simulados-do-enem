<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 16/12/2017
 * Time: 11:28
 */

    require_once ("Controllerdados.php");
    $nome = $_POST['nome'];
    $id = $_SESSION['privilegio'];
    $controller = Controllerdados::getInstance();
    $result = $controller->buscarUsuarios($nome);
    $tamanho = count($result);
    //echo $tamanho;
    if($result==false){
        echo "Erro, usuários com o nome especificado não foram encontrados.";
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
    <link rel="stylesheet" href="../_css/tela-inicial-adm.css">
    <?php include ('../_view/navbar-adm.php')?>

</head>
<body style="background-color:#606c76">
<div class="container-fluid">
    <div class="row">
<div class="col-md-1 col-lg-1"></div>

<div class="col-md-10 col-lg-10 col-sm-12">
<br><br>
    <div class=" card col-sm-12 col-md-12 col-lg-12">
    <br>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Privilégio</th>
                    </tr>
                <?php
                $i = 0;
                while ($i<$tamanho) { ?>
                   
                    <tr>
                        <td><?php echo $result[$i]->getNome(); ?> &nbsp;</td>
                        <td><?php echo $result[$i]->getEmail(); ?> &nbsp;</td>
                        <td><?php echo $result[$i]->getPrivilegio(); ?> &nbsp;</td>
                        <td>                        
                            <form action="alterarprivilegio.php" method="post"><input value="<?php echo 'A%'.$result[$i]->getID(); ?>" name = "privilegio" type="radio">Administrador&nbsp;
                            <input value="<?php echo 'M%'.$result[$i]->getID(); ?>" name = "privilegio" type="radio">Moderador&nbsp;
                            <input value="<?php echo 'N%'.$result[$i]->getID(); ?>" name = "privilegio" type="radio">Usuário&nbsp;
                            <input value="<?php echo 'B%'.$result[$i]->getID(); ?>" name = "privilegio" type="radio">Banir&nbsp;
                            <button type="submit">Alterar</button></form>
                        </td>
                    </tr>
                    <?php $i++;
                }
                ?>
                <tbody>
            </table>
        </div>
        <br>
    </div>
</div>
<div class="col-md-1 col-lg-1"></div>
    </div>
</div>

</body>
</html>
