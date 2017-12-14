<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S.O.S. ENEM</title>
    <link rel="stylesheet" type="text/css" href="_css/bootstrap/css/bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="_css/index.css">
    <script type="text/javascript" src="_js/script.js"></script>
    <style type="text/css">
        .msg-erro {
            color: red;
        }
    </style>
</head>

<body>
     <nav id="principal" class="navbar navbar-expand-lg navbar-expand-md  justify-content-center">
        <a class="navbar-brand" href="#">S.O.S ENEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul id="botoes-nav" class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pagina Inicial
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nossos-planos.html">Nossos Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.html">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div id="list-plano1" class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12">

                <div class="conteudo">
                    <div id="texto">
                        <h2>Notícias</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum totam et dolores voluptatem porro
                            tempore temporibus ducimus ipsam, placeat amet, suscipit. Excepturi, dolore! Beatae rem laudantium
                            fugit quibusdam natus veritatis. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi qui, ea, sed exercitationem unde
                            molestiae. Ullam cumque odit magnam dolores non fugit animi amet deleniti nulla dignissimos,
                            temporibus aut fuga.</p>

                    </div>
                </div>

            </div>
            <div class="col-lg-2 col-md-2"></div>
            <div id="list-plano" class="col-lg-4  col-md-4  col-sm-12">
                <div id="areaLogin">
                    <div id="geral">
                        <div>
                            <div class="btn-comum">
                                <ul>
                                    <li id="ca">
                                        <a href="#" onclick="mostraOculta('cadastro')">Cadastrar</a>
                                    </li>
                                    <li id="en">
                                        <a href="#" onclick="mostraOculta('areatexto')">&nbsp; Entrar &nbsp;</a>
                                    </li>
                                </ul>

                            </div>
                            <div id="areatexto" class="hidden">
                                <form method="POST" action="_controller/login.php" id="formulario-login">
                                    <div id="dados">
                                        <ul id="dados-para-email">
                                            <li>
                                                <input type="email" name="email" required placeholder="Digite seu email">
                                            </li>
                                            <li>
                                                <input type="password" name="senha" required placeholder="Digite sua senha">
                                            </li>
                                            <li id="botao">
                                                <button type="submit">Entrar</button>
                                            </li>
                                        </ul>
                                    </div>
                                </form>

                            </div>
                            <div id="cadastro" class="hidden">
                                <form id="formulario-cadastro" method="POST" action="_util/cadastro.php">
                                    <div id="dados">
                                        <ul id="dados-para-email">
                                            <div class="form-group">
                                                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                                                <span class='msg-erro msg-nome'></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="email" name="email" placeholder="Digite seu email">
                                                <span class='msg-erro msg-email'></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                                                <span class='msg-erro msg-senha'></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="confirmSenha" name="confirmSenha" placeholder="Confirme sua senha">
                                                <span class='msg-erro msg-senha2'></span>
                                            </div>
                                            <div id="botaoCad">
                                                <button type="submmit">Cadastrar</button>
                                            </div>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="login-rede">
                                <ul>
                                    <li id="go">
                                        <a href="https://www.gmail.com" target="_blanck">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entrar com Google</a>
                                    </li>
                                    <li id="fa">
                                        <a href="https://www.facebook.com" target="_blanck">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entrar com Facebook</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="_js/validaCadastro.js"></script>
</body>

</html>