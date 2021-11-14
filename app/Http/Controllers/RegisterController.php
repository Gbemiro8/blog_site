<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return 'Register!';
    }

    public function signin(Request $request) {
        $attributes = $request()->validate([ // validation rules, you can search for request validate on the laravel documentation.
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // create user
        User::create($attributes);
    }
}
