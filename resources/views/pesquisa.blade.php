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
        if($('#pesquisar').val().length>=1)
        {
            $('#qtde').html("Pesquisando...");

            $.get("/pesquisar", {pesquisar:$('#pesquisar').val()},function(clientes){
                $("#qtde").html(clientes.toString());
            });

            var html="";
                for (var i=0; i< clientes.length; i++)
                {
                    html+="<dir class='row bg-info'>";
                    html+="<dir class='col'>"+cliente.nome+"</div>";
                       
                    html+="'</div>'";
                }

              if(clientes.length!=0)
              {
                  $("#textos").html(html);
              }
              else
              {
                $("#qtde").html("Nenhum cliente encontrado!");
                $("#textos").html("");
              }  
                
        }
    });
    
</script>

@endsection



