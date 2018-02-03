<?php
$privilegio_ADM = 'A';
$privilegio_MOD = 'M';
$privilegio_NORM = 'N';
$privilegio_BAN = 'B';

/**
 * Created by PhpStorm.
 * User: allan
 * Date: 16/12/2017
 * Time: 11:28
 */
require_once ("Controllerdados.php");
$id = $_POST['id'];
$acao = $_POST['acao'];
$controller = Controllerdados::getInstance();
if($controller->verificarPrivilegio($id) != $privilegio_MOD AND $controller->verificarPrivilegio($id) == $privilegio_NORM AND $acao == $privilegio_MOD){
    $controller->promoverModerador($id);
}else if($controller->verificarPrivilegio($id) != $privilegio_ADM AND $controller->verificarPrivilegio($id) == $privilegio_NORM AND $acao == $privilegio_ADM){
    $controller->promoverAdministridador($id);
}else if($controller->verificarPrivilegio($id) != $privilegio_NORM AND $acao == $privilegio_NORM){
    $controller->removerPrivilegio($id);
}else if($controller->verificarPrivilegio($id) != $privilegio_BAN AND $acao == $privilegio_BAN){
    $controller->banirUsuario($id);
}

