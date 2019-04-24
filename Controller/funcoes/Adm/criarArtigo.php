<?php

function criarArtigo(){

    $artigo = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirArtigo($artigo);

    header("Location: /adm_artigos");
}

?>