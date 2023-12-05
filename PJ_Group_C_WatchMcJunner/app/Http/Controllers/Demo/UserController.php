<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::simplePaginate(5);

        return view('demo.users', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }
}
