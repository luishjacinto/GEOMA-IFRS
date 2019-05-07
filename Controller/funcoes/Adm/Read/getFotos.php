<?php

function getFotos(){
    $fotos = listarGalerias();
    $imagens = '';

    foreach($fotos as $foto){
        $imagens .= '<div class="div-img"><img class="img-galeria" src="'.$foto['caminho'].'"/></div>';
    }

    return $imagens;
}

?>