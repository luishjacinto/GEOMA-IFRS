<?php

function criarTese(){

    $tese = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    inserirTese($tese);

    header("Location: /adm_teses");
}

?>