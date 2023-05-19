<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap Builder</title>
    <link rel="stylesheet" href="_cdn/css/bootstrap_custom.css">
    <link rel="stylesheet" href="_cdn/css/app.css">
</head>
<body>

 <header class="main_header">
    <div class="header_bar bg-front">
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-location-arrow"></i>
                    <p class="my-auto ml-3">Avenida das Flores, 1234 - Jardim Primavera<br>São Paulo/SP</p>
                </div>

                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-clock-o"></i>
                    <p class="my-auto ml-3">Seg/Sex: 09:00h - 18:00h<br>Sáb/Dom: Plantão</p>
                </div>

                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-envelope"></i>
                    <p class="my-auto ml-3">contato@valeska.com<br>+55 (11) 12345-6789</p>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md my-3">
        <div class="container">
                <div class="navbar-brand">
                    <a href="index.php">
                        <h1 class="text-hide">Imobiliária</h1>
                        <img src="assets/images/logo.png" alt="Logo inclui o nome da empresa, escrito como 'imobiliária'." class="d-inline-block" width="280">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-front" aria-current="page" href="#">Destaque</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Alugar</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Contato</a></li>
                    </ul>
                </div>
        </div>
    </nav>
</header>

<?php
$getApp = filter_input(INPUT_GET, 'app', FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($getApp)) {
    require 'widget/home.php';
}elseif (!empty($getApp) && file_exists("widget/{$getApp}.php")) {
    require "widget/{$getApp}.php";
}else {
    echo "Página não encontrada!";
}
?>

<article class="main_optin bg-dark text-white py-5">
    <div class="container">
        <div class="row mx-auto" style="max-width: 600px">
            <h2>Quer ficar por dentro das novidades?</h2>
            <p>Deixe o seu nome e o seu melhor e-mail nos campos abaixo e nós vamos lhe informar sobre os melhores negócios de todos os lançamentos de sul da ilha</p>
            <form action="">
                <input type="text" class="form-control" name="name" placeholder="Digite seu nome" size="50">
                <input type="email" class="form-control" name="email" placeholder="Digite seu melhor e-mail" size="50">
               <button type="submit" class="btn btn-front">Me avise!</button>
            </form>
        </div>
    </div>
</article>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js"></script>
</body>
</html>