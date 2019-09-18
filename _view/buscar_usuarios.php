<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 16/12/2017
 * Time: 11:28
 */

    require_once("../_controller/controllerdados.php");
    $nome = $_POST['nome'];
    $id = $_SESSION['privilegio'];
    $controller = Controllerdados::getInstance();
    $result = $controller->buscarUsuarios($nome);
    $tamanho = count($result);
    //echo $tamanho;
    if($result==false){
        echo ("<script>alert('Não foram encontrados Usuários com o nome especificado!!');</script>");
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
    <?php include ('navbar-adm.php')?>

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
                        <td><?php if($result[$i]->getPrivilegio()=='N'){
                            echo "Normal";
                            }elseif ($result[$i]->getPrivilegio()=='A'){
                                echo "Administrador";
                            }elseif ($result[$i]->getPrivilegio()=='M'){
                                echo "Moderador";
                            }else{
                                echo "Banido";
                            } ?> &nbsp;</td>
                        <td>                        
                            <form action="../_controller/alterarprivilegio.php" method="post"><input value="<?php echo 'A%'.$result[$i]->getID(); ?>" name = "privilegio" type="radio">Administrador&nbsp;
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
