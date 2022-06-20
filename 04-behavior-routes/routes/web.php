<?php

use Illuminate\Support\Facades\Route;

/* Renomeando os verbos: Fazer somente se necessário para trabalhar com url amigáveis */
Route::resourceVerbs([
    'create' => 'cadastro'
]);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/form', 'form');

/*
Estrutura de Rotas

Route::verbo_http('URI', 'Controller@método');

    Step to step
    1. Definir rota
    2. Criar controlador
    3. Criar método
    4. Camada de View

    Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);
*/

// GET
// Route::get('/users/1', 'UserController@index');
// Route::get('/getData', 'UserController@getData');

// // POST
// Route::post('/postData', 'UserController@postData');

// // PUT
// Route::put('/users/1', 'UserController@testePut');

// // PATCH
// Route::patch('/users/1', 'UserController@testePatch');

// // MATCH -> PUT/PATCH
// Route::match(['PUT', 'PATCH'], '/users/2', 'UserController@testeMatch');

// // DELETE
// Route::delete('/users/1', 'UserController@destroy');

// // ANY
// Route::any('/users', 'UserController@any');


/* CRIANDO BÁSICOS APENAS COM RESOURCE */
// Não existe em cima
Route::get('/posts/premium', 'PostController@premium');
Route::resource('posts', 'PostController');
// Sobreescrever um existente abaixo
// Route::get('/posts', 'PostController@index');

// Quero apenas alguns métodos
// Route::resource('posts', 'PostController')->only(['index', 'show']);

// Quero todos, menos alguns métodos
// Route::resource('posts', 'PostController')->except(['destroy']);


/* Tipos de chamadas */
// 1° Padrão:: URI com Controlador@Método
// Route::get('/users', 'UserController@show');

// 2° Closure:: URI com Função Anônima
Route::get('/users/anonima', function(){
    echo "Listando dos usuários da minha base";
});

// 3° Retornando uma View:: URI com View
Route::view('form', 'form');

// 4° Informando uma URI e Controlador@Método ou Função Anônima
Route::fallback(function(){
    echo "Exemplo 404";
});

// 5° Redirecionamento:: URI, URL Destino e código
Route::redirect('/users/add', url('/form'), 301);

// Validando names e redirecionamentos
Route::get('/artigos', 'PostController@index')->name('posts.index');
Route::get('/artigos/index', 'PostController@indexRedirect')->name('posts.indexRedirect');

// Resgatando parâmetros
Route::get('/users/{id}/comments/{comment}', function($id, $comment){
    var_dump($id, $comment);
});

// Parametro opcional: {comment?}
Route::get('/users/{id}/posts/{post?}', function($id, $post = null){
    var_dump($id, $post);
});

// Validando parâmetros
Route::get('/users/{id}/images/{image?}', function($id, $image = null){
    var_dump($id, $image);
})->where(['id' => '[0-9]+', 'image' => '[a-zA-z]+']);

// Usando controllers
Route::get('/users/{id}/videos/{video?}', 'UserController@userVideo')->where(['id' => '[0-9]+', 'image' => '[a-zA-z]+']);


// Inspecionando Rotas
Route::get('/users/1', 'UserController@inspect')->name('inspect');


/**
 * Agrupamento de Rotas
 */

/*
Route::prefix('admin')->group(function(){
    Route::view('/form', 'form');
});

Route::name('admin.posts.')->group(function(){
    Route::get('/admin/posts/index', 'PostController@index')->name('index');
    Route::get('/admin/posts', 'PostController@show')->name('show');
});

Route::middleware(['throttle:10,1'])->group(function(){
    Route::view('/form', 'form');
});

Route::namespace('Admin')->group(function(){
    Route::get('/users', 'UserController@index');
});

Implementação dos recursos anteriores utilizando apenas um group
*/

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['throttle:10,1'], 'as' => 'admin.'], function(){
    Route::resource('users', 'UserController');
});