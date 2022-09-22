@extends('layouts/web')
@section('content')
    <h1>Nederlands Elftal 2022</h1>
    <p>Hier kunt u de selectie zien van het Nederlands Elftal</p>

    @foreach($footballplayers as $footballplayer)
    <tr>
        <td>{{$footballplayer->first_name}}</td>
        <td>{{$footballplayer->last_name}}</td>
    </tr>
    @endforeach

    <p></p>
    <a href="/about">"naar about"</a>
@endsection

