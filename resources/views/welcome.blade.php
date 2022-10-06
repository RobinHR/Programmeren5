@extends('layouts/app')
@section('content')
    <h1>Nederlands Elftal 2022</h1>
    <p>Hier kunt u de selectie zien van het Nederlands Elftal:</p>
<table class="table">
    <th scope="col">Name</th>
    <th scope="col">Last name</th>
    <th scope="col">Position</th>
    <th scope="col">Back Number</th>
    <th scope="col">Extra Informatie</th>
    @foreach($footballplayers as $footballplayer)
    <tr>
        <td>{{$footballplayer->first_name}}</td>
        <td>{{$footballplayer->last_name}}</td>
        <td>{{$footballplayer->position}}</td>
        <td>{{$footballplayer->back_number}}</td>
        <td>{{$footballplayer->extra_information}}</td>
    </tr>
    @endforeach
</table>
    <p></p>
    <a href="/about">"naar about"</a>
@endsection

