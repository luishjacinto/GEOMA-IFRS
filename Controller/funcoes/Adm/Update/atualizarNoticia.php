<?php

function atualizarNoticia($id){

    $noticia = [
        "titulo"=>trim($_POST["titulo"]),
        "conteudo"=>trim($_POST["conteudo"]),
        "membro"=> $_POST["membro"]
    ];
    alterarNoticia($noticia,$id);

    header("Location: /adm_noticias");
}

?>