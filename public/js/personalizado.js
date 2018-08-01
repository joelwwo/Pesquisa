$(function(){
    $("#pesquisa").keyup(function(){
        //Recuperar o valor do campo
        var pesquisa = $(this).val();
        //Verificar se há alho digitado
        if(pesquisa != '')
        {
            var dados = {
                palavra : pesquisa
            }
            $.get('pesquisar', dados, function(retorna){
                $(".resultado").html(retorna);
            });
            
        }
        else
        {
            $.get('pesquisar', dados, function(retorna){
                $(".resultado").html(retorna);
            });
        }
    });
});