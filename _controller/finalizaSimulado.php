<?php

/**
 * User: Alisson
 * Date: 05/02/2018
 * Time: 15:15
 */
 
require_once( "../_model/Questao.php" );
require_once( "../_model/Prova.php" );
require_once( "../_controller/controllerdados.php" );

$idSimulado = $_POST['idSimulado'];
$respostas = $_POST['respostas'];
$tempo = $_POST['tempo'];

$controller = Controllerdados::getInstance();
$controller->finalizarSimulado($idSimulado, $respostas, $tempo);

?>