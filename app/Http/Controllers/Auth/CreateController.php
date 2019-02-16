<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CatModulo;
use App\Models\Role;
use App\Services\UserService;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('auth.create')
            ->with([
                'roles' => Role::all(),
                'modules' => CatModulo::all()
            ]);
    }

    public function insert(Request $request, UserService $userService)
    {
        $validation = $request->validate([
            'modulo_id' => 'required|integer',
            'rfc' => 'required|max:15|unique:users',
            'nombre' => 'required|max:45',
            'primer_apellido' => 'required|string|max:45',
            'segundo_apellido' => 'required|string|max:45',
            'password' => 'required|confirmed'
        ]);

        $userService->insert($request->all());

        return redirect(route('home'));
    }
}
