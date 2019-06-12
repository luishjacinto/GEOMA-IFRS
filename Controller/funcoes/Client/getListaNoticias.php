<?php

function getListaNoticias(){
    $get = listarNoticias();
    $noticias = array_reverse($get,true);

    $html = '<table class="table text-center"><tbody>';
    foreach($noticias as $noticia){
        $html.='<tr><td id="'.$noticia['id'].'" class="listlink noticialink">'.$noticia['titulo'].'</td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}