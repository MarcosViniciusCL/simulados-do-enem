<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 13/01/2018
 * Time: 12:22
 */
//Em desenvolvimento...
$idquestao = $_POST['idquestao'];
$idusuario = $_SESSION['id'];
$data = new DataHora();

$controller = $controller->inserirDenuncia($idquestao,$idusuario,$data);
if($controller==true){
    echo "Denúncia realizada com sucesso!";
}else{
    echo "Denúncia não realizada!";
}
