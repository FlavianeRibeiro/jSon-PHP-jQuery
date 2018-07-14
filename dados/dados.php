<?php

header('Content-Type:' . "text/plain");

$host = "localhost";
$user = "flavianeribeiro";
$pswd = "";
$dbname = "livro";
$con = null;

$con = @pg_connect("host=$host user=$user password=$pswd dbname=$dbname") or die (pg_last_error($con));

if(!$con){
    echo '[{"erro": "Não foi possível conectar ao banco"';
    echo '}]';
}else {
    //Busca de Listagem 
    $query = "SELECT * FROM `livro`";
    $result = pg_query($query);    
    $n = pg_num_rows($result);
    if(!$result){
        //Caja não haja retorno
        echo '[{"erro": "Há algum erro com  a busca. Não retorna resultado."';
        echo '}]';
    }else if($n < 1){
        echo '[{"erro": "Não há nenhum dado cadastrado."';
        echo '}]';        
    }else {
        //mesclar resultado em um dados
        for($i = 0; $i < $n; $i++){
            $dados[] = pg_fetch_assoc($result, $i);
        }
        
        echo json_encode($dados, JSON_PRETTY_PRINT);
    }
}
?>