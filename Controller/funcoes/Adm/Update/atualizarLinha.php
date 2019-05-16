<?php

function atualizarLinha($id){

    $linha = [
        "nome"=>trim($_POST["nome"]),
    ];
    alterarlinha($linha,$id);

    header("Location: /adm_linhas");
}

?>