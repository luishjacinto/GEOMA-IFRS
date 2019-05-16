z<?php
include_once('Setup.php');

function inserirLinha($linha){
    $novolinha=R::dispense('linha');
    $novolinha['nome']=$linha['nome'];
    $x = R::store($novolinha);
}

function buscarLinha($id){
    return R::findOne('linha','id=?',[$id]);
}

function listarLinhas(){
    $linhas = R::findAll("linha"," ORDER BY id");
    $aux=0;
    $listaLinhas=[];
    foreach ($linhas as $linha) {
    	$listaLinhas[$aux]=R::findOne('linha',"id=?",[$linha["id"]]);
    	$aux++;
    }
    return $listalinhas;
}

function alterarLinha($linha,$id){
    $linhaAtualizado=R::load("linha",$id);
    $linhaAtualizado["nome"]=$linha['nome'];
    return R::store($linhaAtualizado);
}

function deletarLinha($id){
    $linha=R::findOne("linha","id=?",[$id]);
    return R::trash($linha);
}
?>