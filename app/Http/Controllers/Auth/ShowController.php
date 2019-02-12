<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $users = User::with('module')->get();

        foreach ($users as $user) {
            $id_encrypt = encrypt($user->id_user);
            $user->id_encrypt = $id_encrypt;
        }

        //dd($users);

        return view('auth.show', [
            'users' => $users
        ]);
    }
}
