<?php

header('Content-Type:' . "text/plain");

$host   = "localhost";
$user   = "flavianeribero";
$pswd   = "";
$dbname = "livro";
$con = @pg_connect("host=$host user=$user password=$pswd dbname=$dbname") or die (pg_last_error($con));

if(!$con) {
    echo '[{"erro": "Não foi possível conectar ao banco"';
    echo '}]';
}else {
     //SQL de BUSCA LISTAGEM
    $sql = "SELECT * FROM `livro`";
    $result = pg_query($sql);
    $n = pg_num_rows($result);

        if (!$result) {
            //Caso não haja retorno
            echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"}]';
        }else if($n < 1) {
            //Caso não tenha nenhum item
            echo '[{"erro": "Não há nenhum dado cadastrado"}]';
        }else {
            //Mesclar resultados em um array
            for($i = 0; $i<$n; $i++) { 
                $dados[] = pg_fetch_assoc($result, $i); 
            } 
        echo json_encode($dados, JSON_PRETTY_PRINT); 
        } 
    } 
 
?>