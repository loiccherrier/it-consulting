@extends('welcome')

@section('meta')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Gekkode">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h5 class="card-header text-center">Recherche par nom</h5>
            <form class="card-body" action="/search" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nom du film ou série" name="title_film">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col">
            <h5 class="card-header text-center">Recherche par identifiant</h5>
            <form class="card-body" action="/searchbyid" method="GET" role="searchbyid">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Id du film ou série" name="id_film">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <hr>
    @isset($film)
    <div class="container-fluid text-center">
        @if($film['Response'] == 'True')
        <div class="row">
            <div class="col">
                <img src="{{$film['Poster']}}" height="300" alt="image of film">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h2>{{$film['Title']}}</h2>
                    </div>
                    <div class="col">
                        <h2>{{$film['Type']}}</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p>{{$film['Plot']}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Acteurs : {{$film['Actors']}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Année : {{$film['Year']}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($film['Response'] == 'False')
        <div class="row">
            <p>Aucun film/série trouvé</p>
        </div>
        @endif
    </div> <!-- div container -->
    @endif
</div>
@endsection