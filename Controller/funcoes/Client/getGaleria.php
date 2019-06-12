<?php

function getGaleria(){
    $fotos = listarGalerias();
    $imagens = '<h3 class="text-center">Fotos</h3>
    <div class="radiusLeft img-container1">';

    $aux = 0;
    
    foreach($fotos as $foto){
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