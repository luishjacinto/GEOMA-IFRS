<?php
include_once('Setup.php');

function inserirGaleria($galeria){
    $novoGaleria=R::dispense('galeria');
    $novoGaleria['legenda']=$galeria['legenda'];
    $novoGaleria['conteudo']=$galeria['conteudo'];
    $x = R::store($novoGaleria);
}

function buscarGaleria($id){
    return R::findOne('galeria','id=?',[$id]);
}

function listarGalerias(){
    $galerias = R::findAll("galeria"," ORDER BY id");
    $aux=0;
    $listaGalerias=[];
    foreach ($galerias as $galeria) {
    	$listaGalerias[$aux]=R::findOne('galeria',"id=?",[$galeria["id"]]);
    	$aux++;
    }
    return $listaGalerias;
}

function alterarGaleria($galeria,$id){
    $galeriaAtualizado=R::load("galeria",$id);
    $galeriaAtualizado["titulo"]=$galeria['titulo'];
    $galeriaAtualizado['conteudo']=$galeria['conteudo'];
    return R::store($galeriaAtualizado);
}

function deletarGaleria($id){
    $galeria=R::findOne("galeria","id=?",[$id]);
    return R::trash($galeria);
}
?>