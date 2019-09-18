<?php

//$bd = pg_connect("host=localhost port=5432 dbname=pbl user=lucas password=lucas") or die ("Não foi possível conectar ao servidor PostGreSQL");
require_once( '../_util/userdao.php' );
require_once( '../_model/Usuario.php' );
require_once( '../_controller/controllerdados.php' );

if ( ( isset( $_POST[ 'nome' ] ) == false )and( isset( $_POST[ 'email' ] ) == false )and( isset( $_POST[ 'senha' ] ) == false )and( isset( $_POST[ 'password' ] ) == false ) ) {
	echo 'deu ruim';
} else {

	$nome = $_POST[ 'nome' ];
	$email = $_POST[ 'email' ];
	$senha = $_POST[ 'senha' ];
	$confirmSenha = $_POST[ 'confirmSenha' ];

	$controller = Controllerdados::getInstance();

	$controller->cadastraUsuario($nome, $email, $senha,$confirmSenha);
}

?>