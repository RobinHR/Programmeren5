<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footballplayer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){

        $searchedFootballplayer = $request->input('search');
        $errorMessage = '';

        $footballplayers = Footballplayer::latest()->where('first_name', 'like', '%' . $searchedFootballplayer . '%')
            ->orWhere('last_name', 'like', '%' . $searchedFootballplayer . '%')
            ->orWhere('back_number', 'like', '%' . $searchedFootballplayer . '%')
            ->orWhere('category_id', 'like', '%' . $searchedFootballplayer . '%')
            ->orWhere('extra_information', 'like', '%' . $searchedFootballplayer . '%')
            ->orWhere('country', 'like', '%' . $searchedFootballplayer . '%')
            ->get();

        $categories = Category::all();
        return view('footballplayers.index', compact('footballplayers', 'categories', 'errorMessage'));


    }

    public function filter(Request $request){
        if($request->has('category')) {
            $footballplayers = Footballplayer::where('category_id', '=', $request->query('category'))->get();
        } else {
            $footballplayers = Footballplayer::all();
        }
        $errorMessage = '';
        $categories = Category::all();

        return view('footballplayers.index', compact('footballplayers', 'categories', 'errorMessage'));
    }

}
