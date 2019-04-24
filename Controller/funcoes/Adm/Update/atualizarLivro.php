<?php

function atualizarLivro($id){

    $livro = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    alterarLivro($livro,$id);

    header("Location: /adm_livros");
}

?>