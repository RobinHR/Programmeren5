@extends('layouts.app')
@section('content')
    <form action="{{ route('footballplayer.update', $footballplayer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Voornaam</label>
            <input type="text" class="form-control" name="first_name" placeholder="Voornaam" value="{{ $footballplayer->first_name}}">
            <span style="color:red">@error('first_name'){{$message}}@enderror</span>
        </div>

        <div class="form-group">
            <label for="">Achternaam</label>
            <input type="text" class="form-control" name="last_name" placeholder="Achternaam" value="{{ $footballplayer->last_name}}">
            <span style="color:red">@error('last_name'){{$message}}@enderror</span>
        </div>

        @foreach($categories as $category)

            <div class="form-check">
                <input name="categories" class="form-check-input" type="checkbox" value="{{$category->id}}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    {{$category->position}}
                </label>
            </div>

        @endforeach

        <div class="form-group">
            <label for="">Rugnummer</label>
            <input type="number" class="form-control" name="back_number" placeholder="Rugnummer" value="{{ $footballplayer->back_number}}">
            <span style="color:red">@error('back_number'){{$message}}@enderror</span>
        </div>

        <div class="form-group">
            <label for="">Extra Informatie</label>
            <input type="text" class="form-control" name="extra_information" placeholder="Extra Informatie" value="{{ $footballplayer->extra_information}}">
        </div>

        <div class="form-group">
            <label for="">Land</label>
            <input type="text" class="form-control" name="country" placeholder="Land" value="{{ $footballplayer->country}}">
            <span style="color:red">@error('country'){{$message}}@enderror</span>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
        </div>
    </form>


@endsection
