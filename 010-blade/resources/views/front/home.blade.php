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
