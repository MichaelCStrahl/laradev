<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "Listagem de artigos!";

        // $posts = Post::where('created_at', '<=', date('Y-m-d H:i:s'))->orderBy('title', 'desc')->take(2)->get();
        // foreach($posts as $post):
        //     echo "<h1>{$post->title}</h1>";
        //     echo "<h2>{$post->subtitle}</h2>";
        //     echo "<p>{$post->description}</p>";
        //     echo "<hr>";
        // endforeach;


        /**
         * Query no banco
         */
        // $post = Post::where('created_at', '<=', date('Y-m-d H:i:s'))->first();
        // echo "<h1>{$post->title}</h1>";
        // echo "<h2>{$post->subtitle}</h2>";
        // echo "<p>{$post->description}</p>";
        // echo "<hr>";

        /**
         * Procura e se não encontrar vai para 404
         */
        // $post = Post::where('created_at', '<=', date('Y-m-d H:i:s'))->firstOrFail();
        // echo "<h1>{$post->title}</h1>";
        // echo "<h2>{$post->subtitle}</h2>";
        // echo "<p>{$post->description}</p>";
        // echo "<hr>";


        /**
         * Procura a partir da primary key
         */
        // $post = Post::find(1);
        // echo "<h1>{$post->title}</h1>";
        // echo "<h2>{$post->subtitle}</h2>";
        // echo "<p>{$post->description}</p>";
        // echo "<hr>";



        /**
         * Verifique se existe retorno
         */
        // $posts = Post::where('created_at', '<=', date('Y-m-d H:i:s'))->orderBy('title', 'desc')->exists();

        /**
         * Retorna a quantidade de registros
         *
         * Tipos: max, min, count, avg (retorna apenas um registro)
         */
        // $posts = Post::where('created_at', '<=', date('Y-m-d H:i:s'))->count();

        /**
         * Retorna todos registros
         */
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
        foreach($posts as $post):
            echo "<h1>{$post->title}</h1>";
            echo "<h2>{$post->subtitle}</h2>";
            echo "<p>{$post->description}</p>";
            echo "<hr>";
        endforeach;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
