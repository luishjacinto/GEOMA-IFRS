<?php

function getNoticia(){
    $get = listarNoticias();
    $noticias = array_reverse($get,true);

    $html = '';
    foreach($noticias as $noticia){  
        $membro = buscarMembro($noticia['membro']);
        $html .= '<h3>'.$noticia['titulo'].'</h3>
            <span>'.$noticia['data'].'</span><br>
            <span>'.$noticia['conteudo'].'</span><br>
            <span>'.$membro['nome'].'</span>';
    }
    return $html;
}