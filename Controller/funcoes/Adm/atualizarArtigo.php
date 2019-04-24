<?php

function atualizarArtigo($id){

    $artigo = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    alterarArtigo($artigo,$id);

    header("Location: /adm_artigos");
}

?>