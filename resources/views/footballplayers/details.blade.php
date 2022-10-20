@extends('layouts.app')
@section('content')
    <table class = 'table'>
        <th scope="col">Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Position</th>
        <th scope="col">Back Number</th>
        <th scope="col">Extra Informatie</th>
        <th scope="col">Land</th>
            <tr>
                <td>{{$footballplayer->first_name}}</td>
                <td>{{$footballplayer->last_name}}</td>
                <td>{{$footballplayer->category->position}}</td>
                <td>{{$footballplayer->back_number}}</td>
                <td>{{$footballplayer->extra_information}}</td>
                <td>{{$footballplayer->country}}</td>
            </tr>
    </table>
    <a href="{{route('footballplayers.index')}}" class="btn btn-primary">Terug naar de Indexpagina</a>
@endsection
