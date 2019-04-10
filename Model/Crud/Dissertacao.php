<?php
include_once('Setup.php');

function inserirDissertacao($dissertacao){
    $novoDissertacao=R::dispense('dissertacoes');
    $novoDissertacao["membro"]=$dissertacao['membro'];
    $novoDissertacao['nome']=$dissertacao['nome'];
    $novoDissertacao['autor']=$dissertacao['autor'];
    $novoDissertacao['caminho']=$dissertacao['caminho'];
    $x = R::store($novoDissertacao);
}

function buscarDissertacao($id){
    return R::findOne('dissertacoes','id=?',[$id]);
}

function listarDissertacao(){
    $dissertacaos = R::findAll("dissertacoes"," ORDER BY id");
    $aux=0;
    $listaDissertacaos=[];
    foreach ($dissertacaos as $dissertacao) {
    	$listaDissertacaos[$aux]=R::findOne('dissertacoes',"id=?",[$dissertacao["id"]]);
    	$aux++;
    }
    return json_encode($listaDissertacaos);
}

function alterarDissertacao($dissertacao,$id){
    $dissertacaoAtualizado=R::load("dissertacoes",$id);
    $dissertacaoAtualizado['membro']=$dissertacao['membro'];    
    $dissertacaoAtualizado["nome"]=$dissertacao['nome'];
    $dissertacaoAtualizado['autor']=$dissertacao['autor'];
    $dissertacaoAtualizado['caminho']=$dissertacao['caminho'];
    return R::store($dissertacaoAtualizado);
}

function deletarDissertacao($id){
    $dissertacao=R::findOne("dissertacoes","id=?",[$id]);
    return R::trash($dissertacao);
}
?>