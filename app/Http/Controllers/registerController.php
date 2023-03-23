<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class registerController extends Controller
{
    //
    public function register(){


        return view('auth.register');
    }
}
