<<?php

/**
 * User: Alisson
 * Date: 05/02/2018
 * Time: 15:15
 */
 
require_once( "../_controller/controllerdados.php" );

$idQuest = $_POST['idQuest'];
$resposta = $_POST['resposta'];
$idSimul = $_POST['idSimul'];

$controller = Controllerdados::getInstance();
$controller->atualizaResposta($idQuest,$resposta,$idSimul);

 ?>
