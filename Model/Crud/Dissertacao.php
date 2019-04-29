<?php
include_once('Setup.php');

function inserirDissertacao($dissertacao){
    $novoDissertacao=R::dispense('dissertacoes');
    $novoDissertacao["membro"]=$dissertacao['membro'];
    $novoDissertacao['nome']=$dissertacao['nome'];
    $novoDissertacao['caminho']=$dissertacao['caminho'];
    $x = R::store($novoDissertacao);
}

function buscarDissertacao($id){
    return R::findOne('dissertacoes','id=?',[$id]);
}

function listarDissertacoes(){
    $dissertacoes = R::findAll("dissertacoes"," ORDER BY id");
    $aux=0;
    $listaDissertacoes=[];
    foreach ($dissertacoes as $dissertacao) {
    	$listaDissertacoes[$aux]=R::findOne('dissertacoes',"id=?",[$dissertacao["id"]]);
    	$aux++;
    }
    return $listaDissertacoes;
}

function alterarDissertacao($dissertacao,$id){
    $dissertacaoAtualizado=R::load("dissertacoes",$id);
    $dissertacaoAtualizado['membro']=$dissertacao['membro'];    
    $dissertacaoAtualizado["nome"]=$dissertacao['nome'];
    $dissertacaoAtualizado['caminho']=$dissertacao['caminho'];
    return R::store($dissertacaoAtualizado);
}

function deletarDissertacao($id){
    $dissertacao=R::findOne("dissertacoes","id=?",[$id]);
    return R::trash($dissertacao);
}
?>