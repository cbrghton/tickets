<?php

namespace App\Services;

class VerifyService
{
    public function verifyEmpty(array $data)
    {
        unset($data['_token']);
        unset($data['id_user']);

        foreach ($data as $datum) {
            if (!empty($datum)) {
                return false;
            }
        }

        return true;
    }
}
