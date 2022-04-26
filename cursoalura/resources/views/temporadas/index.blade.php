@extends('layolt')

@section('title')
    Temporadas 
@endsection
 
@section('cabeçalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteúdo')
    <ul  class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item">
            {{ $temporada->numero }}ª Temporada
            </li>
        @endforeach
    </ul>
@endsection

