<?php

function atualizarArtigo($id){

    $artigo = [
        "nome"=>trim($_POST["nome"]),
        "autor"=>getMembroNome($_POST["membro"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    alterarArtigo($artigo,$id);

    header("Location: /adm_artigos");
}

?>