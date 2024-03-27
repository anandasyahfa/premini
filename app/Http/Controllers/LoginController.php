<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
