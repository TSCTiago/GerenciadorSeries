@extends('layolt')
@section('title')
    Suas Series
@endsection
@section('cabeçalho')
    Séries  
@endsection
 
@section('conteúdo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif
    <a href="{{route('adicionar')}}" class="btn btn-dark mb-2">Adicionar</a>
 
    <ul  class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}
            <span class="d-flex">
                <a href="series/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm mb-2 mr-2">
                    <i class="fa-solid fa-up-right-from-square"></i>
                </a>
                <form method="post" action="/series/{{$serie->id}}" onsubmit="return confirm('Tem certeza de que seja excluir a série {{$serie->nome}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-2 btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </span>


            </li>
        @endforeach
    </ul>
@endsection

