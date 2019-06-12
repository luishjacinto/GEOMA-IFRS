<?php

function getNoticia(){
    $get = listarNoticias();
    $noticias = array_reverse($get,true);

    $html = '';
        $membro = buscarMembro($noticias[0]['membro']);
        $html .= '<h3 id="noticia_titulo">'.$noticias[0]['titulo'].'</h3><br>
            <span id="noticia_data">'.$noticias[0]['data'].'</span><br>
            <p id="noticia_conteudo" class="justify">'.$noticias[0]['conteudo'].'</p>
            <span id="noticia_membro" >- '.$membro['nome'].'</span>';
    return $html;
}