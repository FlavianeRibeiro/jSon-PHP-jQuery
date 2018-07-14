function carregarLivros(){
    var Itens = "", url = "dados/dados.php";
    
    //Carregar dados
    $.ajax({
        url: url,
        cache:false,
        dataType: "json",
        beforeSend: function(){
            $("h2").html("Carregando ...");
        },
        error: function() {
            $("h2").html("Ha algum problema de dados");
        },
        sucess: function(retorno) {
            if(retorno[0].erro){
                $("h2").html(retorno);
            }else {
                for(var i = 0; i < retorno.length; i++ ){
                    itens += "<tr>";
                    itens += "<td> " + retorno[i].codigo + "</td>";
                    itens += "<td> " + retorno[i].nome + "</td>";
                    itens += "<td> " + retorno[i].autor + "</td>";
                    itens += "<td> " + retorno[i].valor + "</td>";
                    itens += "<td> " + retorno[i].quantidade + "</td>";
                    itens += "</tr>";
                }
                
                //preencer
                $("#minhaTabela tbody").html(itens);
                
                $("h2").html("Carregando");
            }
        }
    });
}