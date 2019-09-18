<?php  
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
ob_start();
if(!isset($_SESSION)){
    session_start();
}
require_once( "Usuario.php" );
if ( ( isset( $_SESSION[ 'id' ] ) != true )and( $_SESSION[ 'id' ] == "" ) || ( isset( $_SESSION[ 'nome' ] ) != true )and( $_SESSION[ 'nome' ] == "" ) || ( isset( $_SESSION[ 'privilegio' ] ) != true )and( $_SESSION[ 'privilegio' ] == "" ) ) {
	unset( $_SESSION[ 'id' ] );
	unset( $_SESSION[ 'nome' ] );
	unset( $_SESSION[ 'privilegio' ] );
	session_destroy();
	header('location:../index.html');
	}else {
		if($_SESSION[ 'privilegio' ] == 'M' || $_SESSION[ 'privilegio' ] == 'A' ){
			$logado = $_SESSION[ 'nome' ];
			$idlogado = $_SESSION[ 'id' ];
			$privilegio = $_SESSION[ 'privilegio' ];
		}else{
			unset( $_SESSION[ 'id' ] );
			unset( $_SESSION[ 'nome' ] );
			unset( $_SESSION[ 'privilegio' ] );
			session_destroy();
			header('location:errodeprivilegio.html');
		}
		
	}
?>