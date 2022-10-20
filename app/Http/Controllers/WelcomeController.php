<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footballplayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $footballplayers = Footballplayer::where('active', '=', '1')->get();
        $categories = Category::all();
        if (Auth::user()->detail_click_counter >=3){

            $errorMessage = '';
            return view('welcome', compact('categories', 'errorMessage', 'footballplayers'));
        } else {
            $errorMessage = 'Je hebt nog niet vaak genoeg op de detailspagina geklikt om een nieuwe speler toe te voegen';


        return view('welcome',
            compact('footballplayers', 'categories', 'errorMessage'));
    }
}}
