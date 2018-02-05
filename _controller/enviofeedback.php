<?php

/**
 * User: Alisson
 * Date: 05/02/2018
 * Time: 15:15
 */

require_once( '../_util/feedbackDao.php' );
require_once( '../_model/Feedback.php' );
require_once( '../_controller/controllerdados.php' );
include_once( "../_model/seguranca.php" );

if ( ( isset( $_POST[ 'comments' ] ) == false )and( isset( $_POST[ 'name' ] ) == false )) {
	echo 'deu ruim';
} else {

	$descricao = $_POST[ 'comments' ];
	$titulo = $_POST[ 'name' ];

	$controller = Controllerdados::getInstance();

	$controller->cadastraFeedback($idlogado, $descricao, $titulo);	
	header("Location:../paineldeusuario.php");
}

?>