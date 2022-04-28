@extends('layolt')

@section('title')
    Temporadas 
@endsection
 
@section('cabeçalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteúdo')
    <ul  class="list-group ">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $temporada->numero }}ª Temporada
            <a href="#" class="btn btn-primary">ver episódios</a>
            <span class="badge badge-secondary bg-dark">
                {{$temporada->episodios->count()}}
            </span>
            </li>
           
        @endforeach
    </ul>
@endsection

