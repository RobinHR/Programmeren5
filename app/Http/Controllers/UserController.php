<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show() {
        $user = Auth::user();

        return view('user.details', compact('user'));
    }

    public function edit($id){
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    public function update($id){

    }

    public function index()
    {
        $myplayers = Auth::user()->footballplayers;

        return view('user.myplayers', compact('myplayers'));
    }
}
