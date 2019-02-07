<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class CreateController extends Controller
{
    public function create(){
        return view('auth.create')
            ->with('roles', Role::all());
    }
}
