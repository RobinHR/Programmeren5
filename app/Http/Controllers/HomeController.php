<?php

namespace App\Http\Controllers;

use App\Models\Footballplayer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {

        $headTitle = 'Home';

        $footballplayers = Footballplayer::all();

        return view('welcome',
        compact('headTitle',
        'footballplayers'));
    }
}
