<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
}
