<?php

namespace App\Services;

use App\User;

class UserService
{
    public function edit(array $data)
    {
        $data = array_filter($data);

        User::find($data['id_user'])
            ->update($data);
    }

}
