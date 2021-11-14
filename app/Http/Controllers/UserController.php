<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(Request $request) {
        return User::all();
    }

    public function showUser(Request $request, User $user) {
        return User::with('post')->find($user->id);
    }
}
