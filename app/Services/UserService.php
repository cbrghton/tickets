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
}
