@extends('layouts.app')
@section('content')
    <ul>
        <li>{{$user->id}}</li>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
    </ul>
    <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
@endsection
