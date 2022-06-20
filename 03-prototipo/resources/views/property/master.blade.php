<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laradev: CRUDO Imobi</title>

    <link rel="stylesheet" href="<?= asset('css/app.css'); ?>">
</head>
<body>
    <!-- <p>
        <a href="<?= url('imoveis') ?>">Listar imóveis</a>
        |
        <a href="<?= url('imoveis/cadastro') ?>">Cadastrar novo imóvel</a>
    </p> -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Lara<b>Dev</b> </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3"><a class="nav-link" href="<?= url('imoveis') ?>">Listar imóveis</a></li>
                <li class="nav-item"><a class="btn btn-warning" href="<?= url('imoveis/cadastro') ?>">Cadastrar novo imóvel</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')
    
    <script src="<?= asset('js/app.js'); ?>"></script>
</body>
</html>