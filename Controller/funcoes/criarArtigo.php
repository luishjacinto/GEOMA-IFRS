<?php

function criarArtigo(){

    $artigo = [
        "nome"=>trim($_POST["nome"]),
        "autor"=>getMembroNome($_POST["membro"]), //talvez retirar
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirArtigo($artigo);

    header("Location: /adm_artigos");
}

function getMembroNome($id){
    //$membro = ;
    return buscarMembro($id)['nome'];
}

?>