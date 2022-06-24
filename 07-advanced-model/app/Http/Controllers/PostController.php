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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        echo "<p>#$post->id Título: $post->title</p>";
        echo "<p>Subtítulo: $post->subtitle</p>";
        echo "<p>Descrição: $post->description</p><hr>";

        $postAuthor = $post->author()->get()->first();

        if($postAuthor):
            echo "<br><h1>Dados do Usuário</h1>";
            echo "<p>Nome do usuário: $postAuthor->name </p>";
            echo "<p>E-mail: $postAuthor->email</p>";
        endif;

        $postCategories = $post->categories()->get();

        if($postCategories):
            echo "<br><h1>Categorias</h1>";

            foreach($postCategories as $category):
                echo "<p>Categoria: #$category->id $category->name</p>";
            endforeach;
        endif;

        /**
         * Atualizando relacionamentos
         * parametro :: id categoria
         */
        // $post->categories()->attach([3]);
        // $post->categories()->detach([3]);
        // $post->categories()->sync([5, 10]);
        // $post->categories()->syncWithoutDetaching([5, 6, 7]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
