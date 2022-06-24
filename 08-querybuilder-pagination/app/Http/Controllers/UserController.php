<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
                ->select('users.id', 'users.name', 'users.status')
                ->where('users.status', '1')
                /**
                 * Tipos de ordenação
                 */
                ->orderBy('name', 'DESC')
                // ->oldest('name') // ASC
                // ->latest('name') // ASC
                // ->inRandomOrder()

                ->limit(10)
                ->offset(10)
                ->get();

        foreach ($users as $user) {
            echo "#$user->id
            Nome: $user->name
            $user->status <br>";
        }
    }
}
