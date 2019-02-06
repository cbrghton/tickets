<?php

namespace App\Services;
use App\User;

class UserService
{
    public function edit($id_user,$modulo_id, $rfc, $nombre,$primer_apellido,$segundo_apellido,$password)
    {
        $user = User::findOrFail($id_user);

        $user->modulo_id = $modulo_id;

        $user->rfc = $rfc;

        $user->nombre = $nombre;

        $user->primer_apellido = $primer_apellido;

        $user->nombre = $segundo_apellido;

        $user->primer_apellido = $password;

        $user->save();
        return true;
    }

}
