@extends('layouts.app')
@section('content')
    <table class = 'table'>
    <th scope="col">Name</th>
    <th scope="col">Last name</th>
    <th scope="col">Position</th>
    <th scope="col">Back Number</th>
    <th scope="col">Extra Informatie</th>
    <th scope="col">Land</th>
    @foreach($myplayers as $myplayer)
            <tr>
            <td>{{$myplayer->first_name}}</td>
            <td>{{$myplayer->last_name}}</td>
                <td>{{$myplayer->category->position}}</td>
            <td>{{$myplayer->back_number}}</td>
            <td>{{$myplayer->extra_information}}</td>
            <td>{{$myplayer->country}}</td>

                <div class="btn-group">
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary"
                               href="{{ route('footballplayer.edit',$myplayer->id) }}">Edit</a>
                            <a class="btn btn-primary"
                               href="{{ route('footballplayer.show',$myplayer->id) }}">Details</a>
                            <form action="{{ route('footballplayer.destroy', $myplayer->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            <form action="{{route('footballplayer.active', $myplayer)}}" method="post">
                                @csrf
                                @if($myplayer->active)
                                    <button class="btn btn-primary" type="submit">Actief</button>
                                @else
                                    <button class="btn btn-outline-dark" type="submit">Niet actief</button>
                                @endif

                            </form>
                        </div>
                    </td>
            @endforeach
            </tr>
        </table>
    <a href="{{route('welcome')}}" class="btn btn-primary">Terug naar Welkom</a>

@endsection
