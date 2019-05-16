<?php

function criarLinha(){

    $linha = [
        "nome"=>trim($_POST["nome"]),
    ];
    inserirLinha($linha);

    header("Location: /adm_linhas");
}

?>