<!doctype html>
<html>

<head>
    <title>Sistemas mjailton</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/auxiliar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/grade.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/m-style.css">

    <script type="text/javascript" src="<?php echo ASSETS ?>js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS ?>js/js.js"></script>

</head>

<body class="base-login">
    <div class="caixa-login position-relative">
        <img src="<?php echo ASSETS ?>img/img-topo-login.png">
        <form action="" method="post">
            <h1>login </h1>
            <label>
                <input type="text" value="" placeholder="Login">
            </label>
            <label>
                <input type="password" value="" placeholder="Senha">
            </label>
            <input type="submit" value="Entrar" class="btn">
        </form>
        <a href="" class="senha text-azul mt-3 d-block">Esqueci minha senha</a>

        <div class=" mostrasenha">
            <div class="caixa">
                <span class="sair senha">X</span>
                <h1 class="h3 mb-0 pb-1">Esqueci minha senha </h1>
                <p class="text-center pb-4">Digite seu email no campo abaixo para recuperar sua senha</p>
                <form action="" method="post">
                    <label>
                        <input type="text" value="" placeholder="Inserir email">
                    </label>
                    </label>
                    <input type="submit" value="Enviar" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>