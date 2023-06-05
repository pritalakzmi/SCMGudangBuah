<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('home');
    }

    public function create(){
        return view('create');
    }
}
