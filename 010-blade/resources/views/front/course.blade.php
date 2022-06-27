@extends('front.master.master-with-sidebar')


@section('title', 'Curso de Laravel')

@section('css')
    <style>
        .teste {
            color: aquamarine;
        }
    </style>
@endsection

@section('js')
    <script>
        alert('teste')
    </script>
@endsection


@section('content')
    <h1 class="teste">Conteúdo</h1>
@endsection

@section('sidebar')
    <h2>[PAGE] Sidebar do curso</h2>
    <ul>
        <li>Lorem ipsum dolor sit amet.</li>
        <li>Ipsam consectetur corporis harum expedita?</li>
        <li>Soluta vul quo quidem rem.</li>
        <li>Vero accusantium eum porro laboriosam!</li>
    </ul>
    <hr>
    @parent
@endsection
