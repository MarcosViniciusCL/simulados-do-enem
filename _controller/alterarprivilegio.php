<?php

//$bd = pg_connect("host=localhost port=5432 dbname=pbl user=lucas password=lucas") or die ("Não foi possível conectar ao servidor PostGreSQL");
require_once( '../_util/userdao.php' );
require_once( '../_model/Usuario.php' );
require_once( '../_controller/controllerdados.php' );

if ( ( isset( $_POST[ 'id' ] ) == false )and( isset( $_POST[ 'privilegio' ] ) == false ) ) {
	echo 'deu ruim';
} else {

	$id = $_POST[ 'id' ];
	$privilegio = $_POST[ 'privilegio' ];
	$controller = Controllerdados::getInstance();

	$controller->alteraprivilegioUsuario($id, $privilegio);
}

?>