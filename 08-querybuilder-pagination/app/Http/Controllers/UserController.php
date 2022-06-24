<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // $users = DB::table('users')
        //         ->select('users.id', 'users.name', 'users.status')
        //         ->where('users.status', '1')
        //         /**
        //          * Tipos de ordenação
        //          */
        //         ->orderBy('name', 'DESC')
        //         // ->oldest('name') // ASC
        //         // ->latest('name') // ASC
        //         // ->inRandomOrder()

        //         ->limit(10)
        //         ->offset(10)
        //         ->get();

        // foreach ($users as $user) {
        //     echo "#$user->id
        //     Nome: $user->name
        //     $user->status <br>";
        // }

        // $users = DB::table('users')
        //         ->selectRaw('users.id, users.name, CASE WHEN users.status = 1 THEN "ATIVO" ELSE "INATIVO" END status_description')
        //         ->whereRaw('(SELECT COUNT(1) FROM addresses a WHERE a.user = users.id) > 2')
        //         ->whereRaw('users.status = 1')
        //         ->orderByRaw('updated_at - created_at', 'ASC')
        //         ->get();

        // $users = DB::select(DB::raw('
        //         SELECT users.id, users.name,
        //         CASE
        //             WHEN users.status = 1 THEN "ATIVO"
        //             ELSE "INATIVO" END status_description
        //         FROM users
        //         WHERE (SELECT COUNT(1) FROM addresses a WHERE a.user = users.id) > 2
        //             AND users.status = :userStatus
        //         ORDER BY updated_at - created_at ASC
        // '), ['userStatus' => '1']);

        // foreach ($users as $user) {
        //     echo "#$user->id
        //     Nome: $user->name
        //     $user->status_description <br>";
        // }

        // DB::table('users')->where('id', '<', '500')->chunkById(50, function($users){
        //     foreach ($users as $user) {
        //         echo "#$user->id
        //         Nome: $user->name
        //         $user->status <br>";
        //     }

        //     echo "<br>";
        //     echo "Encerrou um ciclo";
        //     echo "<br><br>";
        //     sleep(1);
        // });

        // $users = DB::table('users')
        //         // ->whereIn('users.status', [0, 1])
        //         // ->whereNotIn('users.status', [0, 1])
        //         // ->whereNull('')
        //         ->whereNotNull('users.name')
        //         // ->whereColumn('created_at', '=', 'updated_at')
        //         // ->whereDate('created_at', '>', '2022-06-24 17:30:00')
        //         ->whereDay('updated_at', '=', '01')
        //         ->whereMonth('updated_at', '=', '06')
        //         ->whereYear('updated_at', '=', '2022')
        //         ->whereTime('updated_at', '>', '18:00:00')
        //         ->get();

        // foreach ($users as $user) {
        //     echo "#$user->id
        //     Nome: $user->name
        //     $user->status <br>";
        // }


        // $users = DB::table('users')
        //         ->select('users.id', 'users.name', 'users.status', 'addresses.address')
        //         // ->leftjoin('addresses', 'users.id', '=', 'addresses.user')
        //         ->join('addresses', function($join){
        //             $join->on('users.id', '=', 'addresses.user')->where('addresses.status', '=', '1');
        //         })
        //         ->orderBy('users.id', 'ASC')
        //         ->get();

        // echo "Total de registros: {$users->count()}<br>";

        // foreach ($users as $user) {
        //     echo "#$user->id
        //     Nome: $user->name
        //     $user->status ::
        //     $user->address <br>";
        // }

        // DB::table('users')->insert([
        //     'name' => 'Michael',
        //     'email' => 'teste@teste.com',
        //     'password' => bcrypt('1234'),
        //     'status' => 1
        // ]);

        // DB::table('users')->where('id', '=', '1001')->update([
        //     'name' => 'Michael Strahl'
        // ]);

        // DB::table('users')->where('id', '=', '1001')->delete();

    }
}
