<?php

function getFotos(){
    $fotos = listarGalerias();
    $imagens = '<h3 class="text-center">Fotos</h3>
    <div class="container-fluid-adm galeria-adm radiusLeft img-container">';

    $aux = 0;
    
    foreach($fotos as $foto){
        $imagens .= '<a href="editar_foto?'.$foto['id'].'"><div id="ref'.$aux.'" class="div-img"><img id="img'.$aux.'" class="img-galeria" src="'.$foto['caminho'].'"/></div></a>';
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