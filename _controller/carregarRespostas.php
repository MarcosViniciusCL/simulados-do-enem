<?php
require_once( "../_controller/controllerdados.php" );

$idSimulado = $_POST['idSimulado'];

$controller = Controllerdados::getInstance();
return $controller->obterRespostasQuestoes($idSimulado);
?>