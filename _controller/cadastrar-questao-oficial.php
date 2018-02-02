<?php

//$bd = pg_connect("host=localhost port=5432 dbname=pbl user=lucas password=lucas") or die ("Não foi possível conectar ao servidor PostGreSQL");
require_once( '../_util/questaodao.php' );
require_once( '../_model/Questao.php' );
require_once( '../_controller/controllerdados.php' );

if ( ( isset( $_POST[ 'Enunciado' ] ) == false )and( isset( $_POST[ 'correta' ] ) == false )and( isset( $_POST[ 'questaoa' ] ) == false )and( isset( $_POST[ 'questaob' ] ) == false )and( isset( $_POST[ 'questaoc' ] ) == false )and( isset( $_POST[ 'questaod' ] ) == false )and( isset( $_POST[ 'questaoe' ] ) == false )and( isset( $_POST[ 'areaconhecimento' ] ) == false )and( isset( $_POST[ 'ano' ] ) == false ) ) {
	echo 'deu ruim';
} else {

	$enunciado = $_POST[ 'Enunciado' ];
	$questaoa = $_POST[ 'questaoa' ];
	$questaob = $_POST[ 'questaob' ];
	$questaoc = $_POST[ 'questaoc' ];
	$questaod = $_POST[ 'questaod' ];
	$questaoe = $_POST[ 'questaoe' ];
	$questaocorreta = $_POST[ 'correta' ];
	$areaconhecimento = $_POST[ 'areaconhecimento' ];
	$ano = $_POST['ano'];

	$controller = Controllerdados::getInstance();

	$controller->cadastraQuestao($enunciado, $questaoa, $questaob,$questaoc,$questaod,$questaoe,$questaocorreta,$areaconhecimento,$ano);
}

?>