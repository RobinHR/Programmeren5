@extends('layouts/app')
@section('content')
    <h1>Nederlands Elftal 2022</h1>
    <p>Hier kunt u de selectie zien van het Nederlands Elftal:</p>
    <a href="{{route('footballplayer.create')}}" class="btn btn-primary">Voeg nieuwe Speler toe</a>

    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
        @csrf
        <form method="GET" action="{{route('search.index')}}">
            <input type="search" name="search" placeholder="Zoek een Speler"
            class="bg-transparant placeholder-black font-semibold text-sm"
            value="{{request('search')}}">

        </form>
    </div>


    <table class="table">
        <th scope="col">Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Position</th>
        <th scope="col">Back Number</th>
        <th scope="col">Extra Informatie</th>
        <th scope="col">Land</th>
        @foreach($footballplayers as $footballplayer)
            <tr>
                <td>{{$footballplayer->first_name}}</td>
                <td>{{$footballplayer->last_name}}</td>
                <td>{{$footballplayer->category->position}}</td>
                <td>{{$footballplayer->back_number}}</td>
                <td>{{$footballplayer->extra_information}}</td>
                <td>{{$footballplayer->country}}</td>

                @if(Auth::user()->admin)
                    <div class="btn-group">
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary"
                                   href="{{ route('footballplayer.edit',$footballplayer->id) }}">Edit</a>
                                <a class="btn btn-primary"
                                   href="{{ route('footballplayer.show',$footballplayer->id) }}">Details</a>
                                <form action="{{ route('footballplayer.destroy', $footballplayer->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                @endif

                @endforeach
            </tr>
    </table>
    <p></p>
    <a href="/about">"naar about"</a>
@endsection

