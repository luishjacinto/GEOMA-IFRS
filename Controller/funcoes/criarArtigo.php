<?php

function criarArtigo(){

    $membro = [
        "nome"=>trim($_POST["nome"]),
        //"autor"=>$_POST["lattes"], //função para getar o nome do membro
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirArtigo($artigo);

    header("Location: /adm_artigos");
}

?>