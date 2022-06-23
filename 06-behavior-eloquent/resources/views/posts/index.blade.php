<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container my-5">
    <?php
    if(!empty($posts)):
    ?>
    <section class="articles_list">
        <?php
        foreach($posts as $post):
        ?>
        <article class="mb-5">
            <h1>{{ $post->title }}</h1>
            <h2>{{ $post->subtitle }}</h2>
            <p>{{ $post->description }}</p>
            <small>Criado em: {{ date('d/h/Y H:i', strtotime($post->create_at)) }} - Editado em: {{ date('d/h/Y H:i', strtotime($post->updated_at)) }}</small>
        </article>
        <hr>
        <?php
        endforeach;
        ?>
    </section>

    <?php
    endif;
    ?>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
