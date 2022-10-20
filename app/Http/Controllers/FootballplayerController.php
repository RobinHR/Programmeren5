<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footballplayer;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FootballplayerController extends Controller
{
    function index()
    {
        $footballplayers = Footballplayer::where('active', '=', '1')->get();
        $categories = Category::all();

        return view('index',
            compact('footballplayers', 'categories'));
    }

    function store(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'categories' => 'required',
            'back_number' => 'required|numeric',
            'extra_information',
            'country' => 'required',
        ]);


        $data['user_id'] = Auth::user()->id;
        $categoryId = $request->input('categories');
        $data['category_id'] = $categoryId;

        Footballplayer::create($data);


        return redirect(route('welcome'));

    }

    function create()
    {
        $footballplayers = Auth::user()->footballplayers;
        $categories = Category::all();
        $errorMessage = '';
        if (Auth::user()->detail_click_counter >=3){

            $errorMessage = '';
            return view('index', compact('categories', 'errorMessage', 'footballplayers'));
        } else {
            return redirect(route('welcome', compact('footballplayers', 'categories', 'errorMessage')));
        }
    }

    function edit($id)
    {
        $footballplayer = Footballplayer::find($id);
        $categories = Category::all();
        return view('footballplayer.edit', compact('id', 'footballplayer', 'categories'));
    }

    function update(Request $request, Footballplayer $footballplayer)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'categories',
            'back_number' => 'required|numeric',
            'extra_information',
            'country' => 'required',
        ]);

        $categoryId = $request->input('categories');

        $footballplayer->category_id = $categoryId;

        $footballplayer->update($request->all());

        return redirect(route('welcome'));
    }

    public function destroy($id)
    {
        $footballplayer = Footballplayer::find($id);
        $footballplayer->delete();
        return redirect(route('welcome'));
    }

    public function show($id)
    {
        $this->counter();
        $footballplayer = Footballplayer::find($id);
        return view('footballplayer.show', compact('id', 'footballplayer'));
    }

    public function counter(){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $detail_click_counter = $user->detail_click_counter;
        $newDetail_click_counter = $detail_click_counter +1;
        $user->detail_click_counter = $newDetail_click_counter;
        $user->save();
    }

    public function active(Footballplayer $footballplayer)
    {
        $currentState = $footballplayer->active;
        if ($currentState)
        {
            $state = false;
        } else
        {
            $state = true;
        }

        $footballplayer->active = $state;
        $footballplayer->save();

        return redirect(route('user.index'));
    }

}
