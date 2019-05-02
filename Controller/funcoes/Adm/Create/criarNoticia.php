<?php

function criarNoticia(){

    $noticia = [
        "titulo"=>trim($_POST["titulo"]),
        "conteudo"=>trim($_POST["conteudo"]),
        "membro"=> $_POST["membro"]
    ];
    inserirNoticia($noticia);

    header("Location: /adm_noticias");
}

?>