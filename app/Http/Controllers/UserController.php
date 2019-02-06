<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(Request $request, UserService $UserService)
    {

        if (empty($request->input('id_user')) &&
            empty($request->input('modulo_id')) &&
            empty($request->input('rfc')) &&
            empty($request->input('nombre')) &&
            empty($request->input('primer_apellido')) &&
            empty($request->input('segundo_apellido')) &&
            empty($request->input('password'))
            ) {
            return back();
        }

        $validation = $request->validate([

            'modulo_id'=>'nullable|required',
            'rfc'=>'nullable|required|max:15',
            'nombre'=>'nullable|required|max:45',
            'primer_apellido' => 'nullable|string|required|max:45',
            'segundo_apellido' => 'nullable|required|max:45',
            'password' => 'nullable'
        ]);


        //$id_ticket = $request->input('id');
        $modulo_id = $request->input('modulo_id');
        $rfc = $request->file('rfc');
        $nombre = $request->input('nombre');
        $primer_apellido = $request->input('primer_apellido');
        $segundo_apellido = $request->file('segundo_apellido');
        $password = $request->input('password');

        $UserService->edit(1, $modulo_id, $rfc, $nombre,$primer_apellido,$segundo_apellido,$password);
    }

}
