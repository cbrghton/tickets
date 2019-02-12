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
            $user->id_encrypt = encrypt($user->id_user);
        }

        return view('auth.show')->with('users', $users);
    }
}
