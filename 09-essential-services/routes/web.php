<?php

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

use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/log', function(){
    // Log::info('teste');
    // Log::channel('daily')->info('teste');
    // Log::stack(['daily'])->info('teste');
    Log::stack(['daily'])->error('teste');
});


Route::get('/session', function(){

    session([
        'course' => 'LaraDev'
    ]);

    session()->put('name', 'Michael');

    // echo session('name');
    // echo session('student', 'Anônimo');
    // echo session('student', function(){
    //     session()->put('student', 'Michael Strahl');
    //     return session('student');
    // });
    // echo session()->get('name');

    /**
     * Adicionar
     */
    // session()->push('time', 'teste');

    /**
     * apagar
     */
    // $student = session()->pull('student');
    // session()->forget('name');

    // session()->flush();

    // var_dump($student);

    // if(session()->has('course')):
    //     echo "Curso selecionado: " . session()->get('course');
    // endif;

    // if(session()->exists('student')):
    //     echo "<br>Esse indice existe";
    // else:
    //     echo "<br>Esse indice NÃO existe";
    // endif;


    session()->flash('message', 'O artigo foi publicado com sucesso!');
    // session()->reflash();

    var_dump(session()->all());
});
