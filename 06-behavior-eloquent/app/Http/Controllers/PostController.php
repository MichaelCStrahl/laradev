<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function forceDelete($post)
    {
        $post = Post::onlyTrashed()->where(['id' => $post])->forceDelete();
        return redirect()->route('posts.trashed');
    }

    public function restore($post)
    {
        $post = Post::onlyTrashed()->where(['id' => $post])->first();
        // var_dump($posts);

        if($post->trashed()):
            $post->restore();
        endif;

        return redirect()->route('posts.trashed');
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trashed', ['posts' => $posts]);
    }

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
         * OBS: desconsidera registros já deletados :: softDeletes
         * para visualizar os registros tamém deletados utiliza-se
         * o método :: Post::withTrashed()->get()
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
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $postRequest = [
        //     'title' => $request->title
        // ];
        // var_dump($postRequest, $request);

        /**
         * Object -> Prop -> Save
         *
         * OBS: Necessário adicionar o namespace para utilizar a classe Post
         * use App/Post
         */

        /** 1° */
        $post = new Post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        $post->save();

        /** 2° */
        // Post::create([
        //     'title' => $request->title,
        //     'subtitle' => $request->subtitle,
        //     'description' => $request->description
        // ]);

        /**
         * 3°
         * firstOrNew([Condição], [Outros Campos])
         *
         * Funcionamento: Retorna o primeiro registro da condição
         * se não encontrar um registro pode salvar na base desde que
         * seja fornecido todos os outros parâmetros. Não cria o registro
         * automaticamente =>> $post->save();
         */
        // $post = Post::firstOrNew([
        //     'title' => 'teste3'
        // ], [
        //     'subtitle' => 'teste2',
        //     'description' => 'teste2'
        // ]);
        // $post->save();


        /**
         * 4°
         * firstOrNew([Condição], [Outros Campos])
         *
         * Funcionamento: Retorna o primeiro registro da condição
         * se não encontrar um registro pode salvar na base desde que
         * seja fornecido todos os outros parâmetros. Não cria o registro
         * automaticamente =>> $post->save();
         */
        // $post = Post::firstOrCreate([
        //     'title' => 'teste4'
        // ], [
        //     'subtitle' => 'teste4',
        //     'description' => 'teste4'
        // ]);

        // var_dump($post);

        return redirect()->route('posts.index');
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
        return view('posts.edit', ['post' => $post]);
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
        /**
         * 1°
         *
         * Não instancia um novo objeto Post ou utiliza o find para
         * editar o mesmo registro
         */
        $post = Post::find($post->id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        $post->save();

        /**
         * 2°
         * updateOrCreate([Condição], [Outros Campos])
         *
         * Funcionamento: atualiza o registro com a condição procurada
         * se não existir é criado o registro
         */
        // $post = Post::updateOrCreate([
        //     'title' => 'teste5'
        // ], [
        //     'subtitle' => 'teste6',
        //     'description' => 'teste6'
        // ]);

        // Post::where('created_at', '<=', date('2021-m-d H:i:s'))->update(['description' => 'teste2']);

        // var_dump($posts);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        /**
         * 1°
         */
        // Post::find($post->id)->delete();


        /**
         * 2°
         * passa o id de todos elementos que se deseja excluir
         */
        // Post::destroy([2, 3]);

        /**
         * 3°
         * utilizando o where
         */
        // Post::where('created_at', '<=', date('2021-m-d H:i:s'))->delete();

        /**
         * 4°
         */
        Post::destroy($post->id);
        return redirect()->route('posts.index');
    }
}
