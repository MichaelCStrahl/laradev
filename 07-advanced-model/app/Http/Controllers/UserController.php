<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $user = User::find($id);

        echo "<h1>Dados do Usuário</h1>";
        echo "<p>Nome do usuário: $user->name </p>";
        echo "<p>E-mail: $user->email</p><br>";

        $userAddress = $user->addressDelivery()->get()->first();

        if($userAddress):
            echo "<h2>Endereço de entrega</h2>";
            echo "<p>Endereço: $userAddress->address, $userAddress->number</p>";
            echo "<p>Complemento: $userAddress->complement  CEP: $userAddress->zipcode</p>";
            echo "<p>Cidade/Estado: $userAddress->city/$userAddress->state</p>";
        endif;

        /**
         * 1°
         */
        // $address = new Address([
        //     'address' => 'Rua teste',
        //     'number' => '0',
        //     'complement' => 'Apto 123',
        //     'zipcode' => '88000-000',
        //     'city' => 'Floripa',
        //     'state' => 'SC'
        // ]);
        //
        // $user->addressDelivery()->save($address);


        /**
         * 2°
         */
        // $address = new Address();
        // $address->address = 'Tua teste 2';
        // $address->number = '1';
        // $address->complement = 'casa';
        // $address->zipcode = '99000-000';
        // $address->city = 'Teste 3';
        // $address->state = 'RS';

        // $user->addressDelivery()->save($address);


        /**
         * 3°
         */
        // $addressOne = new Address([
        //     'address' => 'Rua teste 3',
        //     'number' => '2',
        //     'complement' => 'Apto 31',
        //     'zipcode' => '77123-000',
        //     'city' => 'Floripa',
        //     'state' => 'SC'
        // ]);

        // $addressTwo = new Address();
        // $addressTwo->address = 'Tua teste 4';
        // $addressTwo->number = '3';
        // $addressTwo->complement = 'casa 2';
        // $addressTwo->zipcode = '99000-123';
        // $addressTwo->city = 'Teste 4';
        // $addressTwo->state = 'MA';

        // $user->addressDelivery()->saveMany([$addressOne, $addressTwo]);


        /**
         * 4°
         * não muito recomendado por conta de que não passa pelo modelo
         * aqui também pode se utilizar o createMany()
         */

        // $user->addressDelivery()->create([
        //     'address' => 'Rua teste 5',
        //     'number' => '5',
        //     'complement' => 'casa 2',
        //     'zipcode' => '77123-123',
        //     'city' => 'Bergamota',
        //     'state' => 'RS'
        // ]);

        /**
         * 5° - Muito cuidado com a carga de consultas no banco pois
         * essa consulta trás os relacionamentos
         * EVITAR USAR EM LOOPS
         */
        // $users = User::with('addressDelivery')->get();

        // dd($users);


        $posts = $user->posts()->orderBy('id', 'DESC')->get();

        if($posts):
            echo "<br><h1>Artigos</h1>";

            foreach($posts as $post):
                echo "<p>#$post->id Título: $post->title</p>";
                echo "<p>Subtítulo: $post->subtitle</p>";
                echo "<p>Descrição: $post->description</p><hr>";
            endforeach;
        endif;


        // $comments = $user->commentsOnMyPost()->get();

        // if($comments):
        //     echo "<br><h3>Comentários nos meus Artigos</h3>";

        //     foreach($comments as $comment):
        //         echo "<p>Post: #$comment->post User: #$comment->user
        //         $comment->content
        //         </p>";
        //     endforeach;
        // endif;


        // $user->comments()->create([
        //     'content' => 'Teste de comentário do usuário'
        // ]);

        $comments = $user->comments()->get();

        if($comments):
            echo "<br><h1>Comentários</h1>";

            foreach($comments as $comment):
                echo "<p>Categoria: #$comment->id $comment->content</p>";
            endforeach;
        endif;

        $students = User::students()->get();

        if($students):
            echo "<br><h1>Alunos</h1>";

            foreach($students as $student):
                echo "<p>Nome do usuário: $student->name </p>";
                echo "<p>E-mail: $student->email</p><hr>";
            endforeach;
        endif;

        $admins = User::admins()->get();

        if($admins):
            echo "<br><h1>Admins</h1>";

            foreach($admins as $admin):
                echo "<p>Nome do usuário: $admin->name </p>";
                echo "<p>E-mail: $admin->email</p><hr>";
            endforeach;
        endif;
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
