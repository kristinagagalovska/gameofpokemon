@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <div class="panel-body">
                    <a href="{{route('user.edit', Auth::user()->id)}}">Edit Profile</a>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Select one or more pokemons
                    (Hold down the Ctrl (windows) / Command (Mac) button to select multiple options)</div>

                <form action="/home" method="post">
                    <select name="pokemons" multiple>
                        <option selected disabled name></option>
                        @foreach($pokemons as $pokemon)
                            <option value="{{ $pokemon->id }}">{{ $pokemon->name }}</option>
                        @endforeach
                    </select>
                    <input type="submit" name="save">
                </form>

            </div>

            <div class="panel-body">
        </div>
        </div>
    </div>
</div>
@endsection
