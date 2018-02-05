<?php
//arquivo de login
// session_start inicia a sessão
if(!isset($_SESSION)){
    session_start();
}
require_once( "Controllerdados.php" );
// as variáveis login e senha recebem os dados digitados na página inicial
$login = $_POST[ 'email' ];
$senha = $_POST[ 'senha' ];



if ($senha != "" || $senha != null || $login != null || $login != ""){
	
	$controller = Controllerdados::getInstance();
	$controller->realizalogin($login, $senha , 0);

}else{
	echo "erro de login";
    //header('location:../index.html');
}
