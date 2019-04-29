<?php

function criarDissertacao(){

    $dissertacao = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirDissertacao($dissertacao);

    header("Location: /adm_dissertacoes");
}

?>