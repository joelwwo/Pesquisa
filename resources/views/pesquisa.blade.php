@extends('layouts.app')
@section('conteudo')

<div class="row">
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline" method="GET" action="/pesquisar">
            <input type="text" name="nome" id="pesquisar" class="form-control mr-sm-2"  placeholder="Pesquisar por nome" aria-label="Search" required autofocus  autocomplete="off">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </nav>
</div>


<br>
<br>
<div class="col-md-12">
    <h4 id="qtde"></h4>
</div>



<div  class="col-md-12" id="textos">

</div>

<script type="text/javascript">    


    $('#pesquisar').keyup(function(){
    if($('#pesquisar').val().length >= 4){
      $('#qtde').html("Pesquisando...");
      $.get("{!! url('pesquisar') !!}", {pesquisar:$('#pesquisar').val()},function(data){
        $('#qtde').html(data.cliente.length.toString()+" Resultados");
        var html = "";
        for (var i = 0; i < data.cliente.length; i++) {
          html += "<div class='panel panel-default'>";
          html += "<div class='panel-heading'>";
          html += "<h3 class='panel-title'> "+data.cliente[i].nome+" </h3>";
          html += "</div>";
          
          html += "</div>";
        }
        if(data.cliente.length!=0){
          $("#textos").html(html);
        }else{
          $('#qtde').html("Nenhum Texto Foi Encontrado!!!");
          $("#textos").html("");
        }
      });
    }
  });
</script>

@endsection



