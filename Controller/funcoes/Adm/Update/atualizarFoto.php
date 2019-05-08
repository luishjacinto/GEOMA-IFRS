<?php

function atualizarFoto($id){
    $fotoAntiga = buscarGaleria($id);


    $foto = [
        "legenda"=>trim($_POST["legenda"]),
        "caminho"=>$fotoAntiga['caminho']
    ];
    alterarGaleria($foto,$id);

    header("Location: /adm_fotos");
}

?>