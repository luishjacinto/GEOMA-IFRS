<?php

function getNoticia(){
    $get = listarNoticias();
    $noticias = array_reverse($get,true);

    $html = '';
    //var_dump($noticias);
    foreach($noticias as $noticia){
        
        $membro = buscarMembro($noticia['membro']);
        $date = str_replace('-','/',$noticia['dataHora']);
        var_dump($noticia['dataHora']) ;
        $html .= '<h3>'.$noticia['titulo'].'</h3>
            <span>'.$date.'</span><br>
            <span>'.$noticia['conteudo'].'</span><br>
            <span>'.$membro['nome'].'</span>';
    }
    return $html;
}