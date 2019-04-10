<?php
include_once('Setup.php');

function inserirTese($tese){
    $novoTese=R::dispense('teses');
    $novoTese["membro"]=$tese['membro'];
    $novoTese['nome']=$tese['nome'];
    $novoTese['autor']=$tese['autor'];
    $novoTese['caminho']=$tese['caminho'];
    $x = R::store($novoTese);
}

function buscarTese($id){
    return R::findOne('teses','id=?',[$id]);
}

function listarTese(){
    $teses = R::findAll("teses"," ORDER BY id");
    $aux=0;
    $listaTeses=[];
    foreach ($teses as $tese) {
    	$listaTeses[$aux]=R::findOne('teses',"id=?",[$tese["id"]]);
    	$aux++;
    }
    return json_encode($listaTeses);
}

function alterarTese($tese,$id){
    $teseAtualizado=R::load("teses",$id);
    $teseAtualizado['membro']=$tese['membro'];    
    $teseAtualizado["nome"]=$tese['nome'];
    $teseAtualizado['autor']=$tese['autor'];
    $teseAtualizado['caminho']=$tese['caminho'];
    return R::store($teseAtualizado);
}

function deletarTese($id){
    $tese=R::findOne("teses","id=?",[$id]);
    return R::trash($tese);
}
?>