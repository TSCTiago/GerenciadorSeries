@extends('layolt')

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
                <form method="post" action="/series/{{$serie->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-2"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection