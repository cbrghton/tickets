<?php

namespace App\Http\Controllers\usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{
    //
    public function index()
    {
        $users = User::with('cat_modulo')->get();
        return view('usuarios.usuarios',['users' => $users]);
    }
}
