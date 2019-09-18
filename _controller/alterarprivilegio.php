<?php

//$bd = pg_connect("host=localhost port=5432 dbname=pbl user=lucas password=lucas") or die ("Não foi possível conectar ao servidor PostGreSQL");
require_once( '../_util/userdao.php' );
require_once( '../_model/Usuario.php' );
require_once( '../_controller/controllerdados.php' );

if ( ( isset( $_POST[ 'id' ] ) == false )and( isset( $_POST[ 'privilegio' ] ) == false ) ) {
	echo 'deu ruim';
} else {

	$dados = $_POST[ 'privilegio' ];
	$split = explode('%', $dados);
	$privilegio = $split[0];
	$id = $split[1];
	$controller = Controllerdados::getInstance();

	$controller->alteraprivilegioUsuario($id, $privilegio);
	header("location:../_view/tela-gerenciar-conta-usuario.php");
}

?>