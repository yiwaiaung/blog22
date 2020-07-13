<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function userAdd(){
        return view('userAdd');
    }
    function userinsert(){
        return 'this is bal...';
    }
}
