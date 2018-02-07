<?php 
    $_UP['pasta'] = '../_db/_imagens/_questoes/';


    $arquivo 	= $_FILES["file"]["tmp_name"];
    $nome 		= $_FILES["file"]["name"];
    $tamanho 	= $_FILES["file"]["size"];
    $ext        = $ext = end( explode( '.', $nome ) );

    $novo_nome = md5($nome).".".$ext;
    move_uploaded_file($_FILES['file']['tmp_name'], $_UP['pasta'] . $novo_nome);
    echo $_UP['pasta'].$novo_nome;
?> 