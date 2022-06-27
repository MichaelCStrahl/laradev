<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @hasSection ('css')
        @yield('css')
    @endif
</head>
<body>

    @include('front.include.header')

    @yield('content')

    @include('front.include.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @hasSection ('js')
        @yield('js')
    @endif
</body>
</html>
