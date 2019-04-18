<?php

function criarMembro(){

    $membro = [
        "nome"=>trim($_POST["nome"]),
        "lattes"=>trim($_POST["lattes"]),
        "cargo"=>$_POST["cargo"],
        "imagem"=> salvarImagem('Membros')
    ];
    inserirMembro($membro);

    header("Location: /adm_membros");
}

?>