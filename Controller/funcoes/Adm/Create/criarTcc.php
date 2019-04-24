<?php

function criarTcc(){

    $tcc = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirTcc($tcc);

    header("Location: /adm_tccs");
}

?>