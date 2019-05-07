<?php

function criarFoto(){

    $foto = [
        "legenda"=>trim($_POST["legenda"]),
        "caminho"=> salvarImagem('Galeria')
    ];
    inserirGaleria($foto);

    header("Location: /adm_fotos");
}

?>