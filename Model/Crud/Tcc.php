<?php
include_once('Setup.php');

function inserirTcc($tcc){
    $novoTcc=R::dispense('tccs');
    $novoTcc["membro"]=$tcc['membro'];
    $novoTcc['nome']=$tcc['nome'];
    $novoTcc['caminho']=$tcc['caminho'];
    $x = R::store($novoTcc);
}

function buscarTcc($id){
    return R::findOne('tccs','id=?',[$id]);
}

function listarTccs(){
    $tccs = R::findAll("tccs"," ORDER BY id");
    $aux=0;
    $listaTccs=[];
    foreach ($tccs as $tcc) {
    	$listaTccs[$aux]=R::findOne('tccs',"id=?",[$tcc["id"]]);
    	$aux++;
    }
    return $listaTccs;
}

function alterarTcc($tcc,$id){
    $tccAtualizado=R::load("tccs",$id);
    $tccAtualizado['membro']=$tcc['membro'];    
    $tccAtualizado["nome"]=$tcc['nome'];
    $tccAtualizado['caminho']=$tcc['caminho'];
    return R::store($tccAtualizado);
}

function deletarTcc($id){
    $tcc=R::findOne("tccs","id=?",[$id]);
    return R::trash($tcc);
}
?>