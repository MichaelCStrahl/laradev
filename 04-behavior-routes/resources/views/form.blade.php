<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário :: Teste de Rotas</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container my-5">
        <!-- GET method -->
        <!-- <form action="{{ url('/getData') }}" method="GET" autocomplete="off">
            <div class="form-group">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Michael">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Strahl">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="teste@teste.com">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form> -->

        <!-- POST method -->
        <!-- <form action="{{ url('/postData') }}" method="POST" autocomplete="off">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Michael">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Strahl">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="teste@teste.com">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form> -->

        <!-- PUT method -->
        <!-- <input type="hidden" name="_method" value="PUT"> === @method('PUT') -->
        <!-- <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Michael">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Strahl">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="teste@teste.com">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form> -->

        <!-- PATCH method -->
        <!-- <input type="hidden" name="_method" value="PUT"> === @method('PATCH') -->
        <!-- <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">
            @method('PATCH')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Michael">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Strahl">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="teste@teste.com">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form> -->

        <!-- MATCH -> PUT/PATCH method -->
        <!-- Change method @method('PATCH') <> @method('PUT') -->
        <!-- <form action="{{ url('/users/2') }}" method="POST" autocomplete="off">
            @method('PATCH')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Michael">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Strahl">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="teste@teste.com">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form> -->

        <!-- DELETE method -->
        <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">
            @method('DELETE')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Michael">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Strahl">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="teste@teste.com">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form>
    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>