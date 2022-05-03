<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="icone.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <title>Controle de Séries</title> --}}
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/423911b29e.js" crossorigin="anonymous"></script>
 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
        <a class="navbar navbar-expand-lg" href="{{ route('series') }}">Home</a>
        <a href="/sair" class="text-danger">Sair</a>
   </nav>
    <div class="container">
        <div class="jumbotron text-center bg-secondary progress d-flex justify-content-center align-items-center mb-5" style="height: 200px">
            <h1>@yield('cabeçalho')</h1>
        </div>
 
        @yield('conteúdo')
 
 
    </div>
</body>
</html>

