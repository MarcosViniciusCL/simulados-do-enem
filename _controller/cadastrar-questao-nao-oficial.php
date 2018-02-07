<?php

    require_once ('../_controller/controllerdados.php');

    if ( ( isset( $_POST[ 'enunciado' ] ) == false )and( isset( $_POST[ 'a' ] ) == false ) and( isset( $_POST[ 'b' ] ) == false )
            and( isset( $_POST[ 'c' ] ) == false ) and( isset( $_POST[ 'd' ] ) == false ) and( isset( $_POST[ 'e' ] ) == false )
                and( isset( $_POST[ 'resposta' ] ) == false )) {

        echo 'deu ruim';
    }else{
        $enunciado = $_POST['enunciado'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $e = $_POST['e'];
        $resposta = $_POST['resposta'];
        $area = $_POST['area'];
        $ano = $_POST['ano'];

        $controller = Controllerdados::getInstance();
        $controller->cadastrarQuestaoNaoOficial($idlogado, $ano,$area,$enunciado, "N",$a, $b, $c, $d, $e, $resposta);
    }




?>