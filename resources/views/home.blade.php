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
                <div class="panel-body">
                    <a href="{{route('user.mypokemons', Auth::user()->id)}}">My Pokemon</a>
                </div>
                <div class="panel-body">
                    <a href="{{route('user.pokemon', Auth::user()->id)}}">Select Pokemon</a>
                </div>
            </div>
            <div class="panel-body">
        </div>
        </div>
    </div>
</div>
@endsection
