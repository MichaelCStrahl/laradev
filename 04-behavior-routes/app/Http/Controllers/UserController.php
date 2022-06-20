<?php

namespace Laradev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do usuário com código 1</h1>";
    }

    public function getData()
    {
        return "<h1>Disparou a ação de GET</h1>";
    }

    public function postData(Request $request)
    {
        var_dump($request->request);
        return "<h1>Disparou a ação de POST</h1>";
    }

    public function testePut(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 1</h1>";
        var_dump($request->request);
        return "<h1>Disparou a ação de PUT</h1>";
    }

    public function testePatch(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 1</h1>";
        var_dump($request->request);
        return "<h1>Disparou a ação de PATCH</h1>";
    }

    public function testeMatch(Request $request)
    {
        echo "<h1>Disparou a ação de MATCH -> PUT/PATCH</h1>";
        echo "<h1>Usuário da edição é o de código 2</h1>";
        var_dump($request);
    }

    public function destroy(Request $request)
    {
        var_dump($request->request);
        return "<h1>Disparou a ação de DELETE para o registro 1</h1>";
    }

    public function any()
    {
        return "<h1>Qualquer verbalização é aceita</h1>";
    }

    public function userVideo($id, $video)
    {
        echo "Controller: User <br> Método: userVideo";
        var_dump($id, $video);
    }

    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        var_dump($route, $name, $action);
    }
}
