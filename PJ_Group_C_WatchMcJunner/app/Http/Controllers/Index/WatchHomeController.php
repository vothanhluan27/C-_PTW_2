<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchHomeController extends Controller
{
    public function index()
    {
        return view('dashboard.watch-home');
    }
}
