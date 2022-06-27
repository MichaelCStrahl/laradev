@extends('front.master.master')

@section('title', 'Seja muito bem-vindo')

@section('content')



{{ $user->name }}

<br>

{{ $alert }}

{!! $alert !!}

{{-- Teste --}}

<hr>

<?php
    echo "<h1>PHP</h1>";
if(!empty($user->email)):
    echo"<p>[IF] O usuário não informou o e-mail</p>";

elseif($user):
    echo"<p>[ELSEIF] Existe um objeto usuário</p>";

else:
    echo"<p>[ELSE] Não existe um objeto usuário</p>";

endif;

echo "<p>[TERNÁRIA DUPLA] " . ((!empty($user->email)) ? ' O usuário não informou o e-mail' :  ($user ? ' Existe um objeto usuário' : ' Não existe um objeto usuário')) . "</p>";

if($user):
    echo "<p>[ISSET] Existe um usuário</p>";
endif;

if(empty($user->teste)):
    echo "<p>[EMPTY] O usuário->teste está vazio</p>";
endif;

$var = '1';
switch ($var):
    case '1':
        echo "<p>[CASE] 1</p>";
        break;

    case '2':
        echo "<p>[CASE] 1</p>";

    default:
        echo "<p>[CASE] default</p>";
endswitch;

echo "<h2>Listagem de Cursos</h2>";
for($i = 0; $i < count($courses); $i++):
    echo "<p>" . $courses[$i]['name'] . " - " . $courses[$i]['tutor'] . "</p>";
endfor;

echo "<hr>";

foreach($courses as $course):
    echo "<p>" . $course['name'] . " - " . $course['tutor'] . "</p>";
endforeach;

?>

<br>
<h1>Blade</h1>
@if(!empty($user->email))
    <p>[IF] O usuário não informou o e-mail</p>
@elseif($user)
    <p>[ELSEIF] Existe um objeto usuário</p>
@else
    <p>[ELSE] Não existe um objeto usuário</p>
@endif

<p>[TERNÁRIA DUPLA] {{ ((!empty($user->email)) ? ' O usuário não informou o e-mail' :  ($user ? ' Existe um objeto usuário' : ' Não existe um objeto usuário')) }}</p>

@isset($user)
    <p>[ISSET] Existe um usuário</p>
@endisset

@empty($user->teste)
    <p>[EMPTY] O usuário->teste está vazio</p>
@endempty


@switch($var)
    @case('1')
        <p>[CASE] 1</p>
        @break
    @case('2')
        <p>[CASE] 1</p>
        @break
    @default
        <p>[CASE] default</p>
@endswitch

<h2>Listagem de Cursos</h2>
@for($i = 0; $i < count($courses); $i++)
    <p>{{ $courses[$i]['name'] }} - {{ $courses[$i]['tutor'] }}</p>
@endfor

<hr>

@foreach($courses as $course)
    <p style="background-color: {{ ($loop->index % 2 === 0 ? 'red' : 'blue' ) }}"> {{ $course['name'] }} - {{ $course['tutor'] }}</p>

    {{-- @php
        var_dump($loop);
    @endphp --}}
@endforeach

@component('front.components.alert', ['type' => 'danger', 'datetime' => date('d/m/Y h:i')])
    Mensagem de teste
@endcomponent

@alert(['type' => 'danger', 'datetime' => date('d/m/Y h:i')])
        Mensagem gerada através do meu componente
@endalert

@endsection
