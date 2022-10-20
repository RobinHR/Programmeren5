@extends('layouts.app')
@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" value="{{ $user->name}}"><br>
            <span style="color:red">@error('name'){{$message}}@enderror</span>
        </div>
        <div>
            <label for="name">E-mail</label><br>
            <input type="text" id="name" name="name" value="{{ $user->email}}"><br>
            <span style="color:red">@error('name'){{$message}}@enderror</span>
        </div>
        <div>
            <label for="name">password</label><br>
            <input type="text" id="name" name="name" value="{{ $user->password}}"><br>
            <span style="color:red">@error('name'){{$message}}@enderror</span>
        </div>
        <div><br>
            <input type="submit" class="btn btn-primary" value="Opslaan">
        </div>
    </form>


@endsection
