@extends('layouts.app')
@section('conteudo')

<div class="row">
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" method="POST" action="/pesquisar">
            <input type="text" name="pesquisa" id="pesquisa" class="form-control mr-sm-2"  placeholder="Pesquisar por nome" aria-label="Search" required autofocus  autocomplete="off">
        </form>
    </nav>
</div>


<br>
<br>
<div class="col-md-12">
    <h4 id="qtde"></h4>
</div>

<ul class="resultado"></ul>

@endsection



