<?php

function getGaleria(){
    $fotos = listarGalerias();
    $imagens = '<h3 class="text-center">Fotos</h3>
    <div class="radiusLeft img-container1">';

    $aux = 0;
    
    foreach($fotos as $foto){
        $imagens .= '<div class="div-img ref'.$aux.'"><img id="'.$foto['id'].'" class="img-galeria img'.$aux.'" src=""/></div>';
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