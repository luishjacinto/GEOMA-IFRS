<?php

function atualizarTese($id){

    $tese = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    alterarTese($tese,$id);

    header("Location: /adm_teses");
}

?>