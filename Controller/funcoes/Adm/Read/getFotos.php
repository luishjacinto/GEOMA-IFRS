<?php

function getFotos(){
    $fotos = listarGalerias();
    $imagens = '';

    $aux = 0;

    foreach($fotos as $foto){
        $imagens .= '<a href="editar_foto?'.$foto['id'].'"><div id="ref'.$aux.'" class="div-img"><img id="img'.$aux.'" class="img-galeria" src="'.$foto['caminho'].'"/></div></a>';
        $aux++;
    }

    return $imagens;
}

?>