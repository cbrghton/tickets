<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Services\UserService;
use App\Services\VerifyService;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit()
    {
        return view('auth.edit')
            ->with('roles', Role::all());
    }

    public function update(Request $request, UserService $UserService, VerifyService $verify)
    {
        if ($verify->verifyEmpty($request->all())) {
            return back();
        }

        $validation = $request->validate([
            'id_user' => 'required',
            'id_modulo' => 'nullable',
            'rfc' => 'nullable|max:15',
            'nombre' => 'nullable|max:45',
            'primer_apellido' => 'nullable|string|max:45',
            'segundo_apellido' => 'nullable|string|max:45',
            'password' => 'nullable|confirmed'
        ]);

        $UserService->update($request->all());
    }
}
