<?php

namespace App\Services;

use App\User;

class UserService
{
    public function update(array $data)
    {
        $data = array_filter($data);

        $user = User::find($data['id_user']);

        $user->update($data);

        if (array_key_exists('id_rol', $data)) {
            $user->roles()->sync($data['id_rol']);
        } else {
            $user->roles()->detach();
        }
    }

    public function insert(array $data)
    {
        $user = User::create([
            'modulo_id' => $data['modulo_id'],
            'rfc' => $data['rfc'],
            'nombre' => $data['nombre'],
            'primer_apellido' => $data['primer_apellido'],
            'segundo_apellido' => $data['segundo_apellido'],
            'password' => bcrypt($data['password'])
        ]);

        if (array_key_exists('id_rol', $data)) {
            $user->roles()->sync($data['id_rol']);
        } else {
            $user->roles()->detach();
        }
    }
}
