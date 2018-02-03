<?php

require_once( "../_controller/controllerdados.php" );


$id_usuario = $_SESSION['id'];
$id_questao = $_POST['idQuestao'];
$avaliacao = $_POST['avaliacao'];

$controller = Controllerdados::getInstance();
$controller->avaliarQuestao($id_usuario, $id_questao, $avaliacao);

?>