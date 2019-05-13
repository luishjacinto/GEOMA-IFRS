<?php

function getContadores(){

    $artigos = count(listarArtigos());
    $dissertacoes =  count(listarDissertacoes());
    $fotos =  count(listarGalerias());
    $livros =  count(listarLivros());
    $membros =  count(listarMembros());
    $noticias =  count(listarNoticias());
    $tccs =  count(listarTccs());
    $teses =  count(listarTeses());

    $data = array($artigos,$dissertacoes,$fotos,$livros,$membros,$noticias,$tccs,$teses);
    return $data;
}

?>