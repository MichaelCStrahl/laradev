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

Route::get('/', function () {
    $user = new stdClass();
    $user->name = "Michael";
    $user->birth = "1996-07-11";

    $alert = "<div style='background-color: red;'>Teste</div>";

    // return view('front.home')->with(['user' => $user]);
    // return view('front.home')->with('user', $user);
    // return view('front.home')->with('user', $user)->with('tutor', $user);
    // return view('front.home', compact('user'));

    return view('front.home', [
        'user' => $user,
        'alert' => $alert
    ]);
});
