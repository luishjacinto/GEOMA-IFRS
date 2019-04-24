<?php

function criarLivro(){

    $livro = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirLivro($livro);

    header("Location: /adm_livros");
}

?>