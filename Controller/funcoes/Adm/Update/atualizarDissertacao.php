<?php

function atualizarDissertacao($id){

    $dissertacao = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    alterarDissertacao($dissertacao,$id);

    header("Location: /adm_dissertacoes");
}

?>