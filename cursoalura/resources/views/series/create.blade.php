@extends('layolt')

@section('cabeçalho')
    Adicionar Série 
@endsection


@section('conteúdo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif


<form method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control mb-2" name="nome" placeholder="Adicione o Nome da série">
    </div>
    <button class="btn btn-primary">Adicionar</button>

</form> 
@endsection






