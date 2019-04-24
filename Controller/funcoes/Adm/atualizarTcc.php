<?php

function atualizarTcc($id){

    $tcc = [
        "nome"=>trim($_POST["nome"]),
        "caminho"=>trim($_POST["caminho"]),
        "membro"=> $_POST["membro"]
    ];
    alterartcc($tcc,$id);

    header("Location: /adm_tccs");
}

?>