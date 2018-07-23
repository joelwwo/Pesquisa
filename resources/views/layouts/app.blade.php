<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/personalizado.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        {{-- Inclui o cabeçalho --}}
        @include('layouts.nav')

        {{-- Inclui o conteúdo --}}
        @yield('conteudo')

        {{-- Inclui o rodapé --}}
        @include('layouts.rodape')
    </div>

    <link rel="application" href="{{asset('js/app.js')}}">
    
</body>
</html>