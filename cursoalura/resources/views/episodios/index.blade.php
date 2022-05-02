@extends('layolt')
<<<<<<< HEAD

@section('title')
    Episódios
@endsection

=======
@section('title')
    Episódios
@endsection
>>>>>>> 6ed9448c3102befc2f8ef150d77e181079cd42b9
@section('cabeçalho')
    Episódios  
@endsection
 
@section('conteúdo')
<<<<<<< HEAD
@include('mensagem', ['mensagem' => $mensagem])

    <form action="/temporadas/{{ $temporadaId }}/episodios/assistir" method="post">
=======
    <form action="/temporada/{{ $temporadaId }}/episodios/assistir" method="post">
>>>>>>> 6ed9448c3102befc2f8ef150d77e181079cd42b9
        @csrf
        <ul class="list-group">
            @foreach($episodios as $episodio)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio {{ $episodio->numero }}
<<<<<<< HEAD
                    <input type="checkbox"
                    name="episodios[]"
                    value="{{ $episodio->id }}"
                    {{ $episodio->assistido ? 'checked' : '' }}>
=======
                    <input type="checkbox" name="episodios[]" value="{{ $episodio->id }}">
>>>>>>> 6ed9448c3102befc2f8ef150d77e181079cd42b9
                </li>

            @endforeach
        </ul>
        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
@endsection