<?php

function atualizarMembro($id){
    $membroAntigo = buscarMembro($id);

    $membro = [
        "nome"=>trim($_POST["nome"]),
        "lattes"=>trim($_POST["lattes"]),
        "cargo"=>$_POST["cargo"],
        "imagem"=> checarAlteracao('Membros',$membroAntigo['imagem'])
    ];
    alterarMembro($membro,$id);

    header("Location: /adm_membros");
}

?>