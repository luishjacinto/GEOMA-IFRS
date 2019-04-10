<?php
include_once('Setup.php');

function inserirArtigo($artigo){
    $novoArtigo=R::dispense('artigos');
    $novoArtigo["membro"]=$artigo['membro'];
    $novoArtigo['nome']=$artigo['nome'];
    $novoArtigo['autor']=$artigo['autor'];
    $novoArtigo['caminho']=$artigo['caminho'];
    $x = R::store($novoArtigo);
}

function buscarArtigo($id){
    return R::findOne('artigos','id=?',[$id]);
}

function listarArtigo(){
    $artigos = R::findAll("artigos"," ORDER BY id");
    $aux=0;
    $listaArtigos=[];
    foreach ($artigos as $artigo) {
    	$listaArtigos[$aux]=R::findOne('artigos',"id=?",[$artigo["id"]]);
    	$aux++;
    }
    return json_encode($listaArtigos);
}

function alterarArtigo($artigo,$id){
    $artigoAtualizado=R::load("artigos",$id);
    $artigoAtualizado['membro']=$artigo['membro'];    
    $artigoAtualizado["nome"]=$artigo['nome'];
    $artigoAtualizado['autor']=$artigo['autor'];
    $artigoAtualizado['caminho']=$artigo['caminho'];
    return R::store($artigoAtualizado);
}

function deletarArtigo($id){
    $artigo=R::findOne("artigos","id=?",[$id]);
    return R::trash($artigo);
}
?>