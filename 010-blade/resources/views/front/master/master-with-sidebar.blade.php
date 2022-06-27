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



    <div class="container py-4">
        <div class="row">

            <div class="col-8">
                @yield('content')
            </div>

            <div class="col-4">
                {{-- @yield('sidebar') --}}

                @section('sidebar')
                    <h3>[MASTER] Sidebar</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, nesciunt.</li>
                        <li>Voluptatem harum magnam animi aliquam corporis voluptatibus vero error at.</li>
                        <li>Delectus ducimus similique facilis voluptates quam laudantium sint. Repellendus, praesentium.</li>
                    </ul>
                @show
            </div>

        </div>
    </div>

    @include('front.include.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @hasSection ('js')
        @yield('js')
    @endif
</body>
</html>
