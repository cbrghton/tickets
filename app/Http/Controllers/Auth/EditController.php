<?php

namespace App\Http\Controllers\Auth;

use App\Services\UserService;
use App\Services\VerifyService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Request $request, UserService $UserService, VerifyService $verify)
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

        $UserService->edit($request->all());
    }
}
