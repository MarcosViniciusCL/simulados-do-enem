<?php
	include_once( "../_model/seguranca.php" );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de ajuda</title>
    <!-- Milligram CSS minified -->
	<link rel="stylesheet" href="../_css/milligram.min.css">
	
	<!-- Main Styles -->
    <link rel="stylesheet" href="../_css/tela-inicial-adm.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap3.css">
    <link rel="stylesheet" type="text/css" href="../_css/gerencia-conta.css">
</head>
<body style="background-color:#606c76">
    <div>
     <?php 
     /*Então, aqui deve aparecer um if para saber qual usuário está uzando a página
     dependendo de quem seja deve ser alterada a navbar de usuário, adm e moderador. */
		if($_SESSION['privilegio'] == 'A'){
       		include('navbar-adm.php');
		}else if($_SESSION['privilegio'] == 'M'){
			include('navbar-adm.php');
		}else if($_SESSION['privilegio'] == 'N'){
			include('navbar-usuario.php');
		}
    ?>
    </div>

<div class="container-fluid">
        <div class="row">
            <div class=" card col-md-4 col-lg-4 col-sm-12">

                <div class="col-md-10 col-lg-10 col-sm-12">
                    <h3>Dúvidas Frequentes</h3>
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#item-1">Como fazer um simulado?</a>
                        <a class="list-group-item list-group-item-action" href="#item-2">Como escolher o ano simulado?</a>
                        <a class="list-group-item list-group-item-action" href="#item-3">Como funciona a pontuaçãodo sistema?</a>
                        <a class="list-group-item list-group-item-action" href="#item-4">O que acontece ao desistir de uma prova?</a>
                        <a class="list-group-item list-group-item-action" href="#item-5">Como posso submeter uma questão para o sistema?</a>
                        <a class="list-group-item list-group-item-action" href="#item-6">Posso trocar de plano?</a>
                        <a class="list-group-item list-group-item-action" href="#item-7">Como realizar denúncias?</a>
                        <a class="list-group-item list-group-item-action" href="#item-8">O que não devo fazer, pois pode provocar um banimento</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-1 col-lg-1"></div>
            <div class=" card col-md-6 col-lg-6 col-sm-12">
             <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

                        <h4 id="item-1">Como fazer um simulado?</h4>
                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        </p>

                        <h4 id="item-2">Como escolher o ano simulado?</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                      </p>

                        <h4 id="item-3">Como funciona a minha pontuação no sistema?</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        </p>

                        <h4 id="item-4">O que acontece ao desistir da prova?</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn</p>
                     

                        <h4 id="item-5">Como posso submeter uma questão para o sistema?</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn</p>

                        <h4 id="item-6">Posso trocar de plano?</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn</p>

                        <h4 id="item-7">Como realizar denúncias?</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn</p>

                        <h4 id="item-8">O que não devo fazer, pois pode provocar um banimento</h4>

                        <p>gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn<br>
                        gtnwegsfugdfhgjfbgdfgjkdjkvnxjknvjknxcjknvjkn</p>

                    </div>
            </div>
            <div class="col-md-1 col-lg-1 col-sm-12">

            </div>

        </div>
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12">

            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">

            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
               
            </div>

        </div>

    </div>
    
</body>
</html>