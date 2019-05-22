<?php

function getGaleria(){
    $fotos = listarGalerias();
    $imagens = '<h3 class="text-center">Fotos</h3>
    <div class="radiusLeft img-container1">';

    $aux = 0;
    
    foreach($fotos as $foto){
        //$imagens .= '<div class="div-img ref'.$foto['id'].'"><img id="'.$foto['id'].'" src="Armazenamento/Galeria/default-pic.png" data-src="'.$foto['caminho'].'" data-srcset="'.$foto['caminho'].' 2x,'.$foto['caminho'].' 1x" class="lazy img-galeria img'.$foto['id'].'"/></div>';
        $imagens .= '<a class="modalTrigger" data-toggle="modal" data-target="#modal"><div class="div-img ref'.$aux.'"><img id="'.$foto['id'].'" loading="lazy" src="'.$foto['caminho'].'" class="lazy img-galeria img'.$aux.'"/></div></a>';
        $aux++;
    }
    $imagens .= '</div><br>';

    if(empty($fotos) == false){
        return $imagens;      
    }else{
        return '';
    }
    
}

?>