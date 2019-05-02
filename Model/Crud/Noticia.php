<?php
include_once('Setup.php');

function inserirnoticia($noticia){
    $novoNoticia=R::dispense('noticias');
    $novoNoticia["membro"]=$noticia['membro'];
    $novoNoticia['titulo']=$noticia['titulo'];
    $novoNoticia['conteudo']=$noticia['conteudo'];
    $x = R::store($novoNoticia);
}

function buscarnoticia($id){
    return R::findOne('noticias','id=?',[$id]);
}

function listarnoticias(){
    $noticias = R::findAll("noticias"," ORDER BY id");
    $aux=0;
    $listaNoticias=[];
    foreach ($noticias as $noticia) {
    	$listaNoticias[$aux]=R::findOne('noticias',"id=?",[$noticia["id"]]);
    	$aux++;
    }
    return $listaNoticias;
}

function alterarnoticia($noticia,$id){
    $noticiaAtualizado=R::load("noticias",$id);
    $noticiaAtualizado['membro']=$noticia['membro'];    
    $noticiaAtualizado["titulo"]=$noticia['titulo'];
    $noticiaAtualizado['conteudo']=$noticia['conteudo'];
    return R::store($noticiaAtualizado);
}

function deletarnoticia($id){
    $noticia=R::findOne("noticias","id=?",[$id]);
    return R::trash($noticia);
}
?>