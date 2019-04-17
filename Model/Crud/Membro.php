<?php
include_once('Setup.php');

function inserirMembro($membro){
    $novoMembro=R::dispense('membros');
    $novoMembro["nome"]=$membro['nome'];
    $novoMembro['cargo']=$membro['cargo'];
    $novoMembro['lattes']=$membro['lattes'];
    $novoMembro['imagem']=$membro['imagem'];
    $x = R::store($novoMembro);
}

function buscarMembro($id){
    return R::findOne('membros','id=?',[$id]);
}

function listarMembros(){
    $membros = R::findAll("membros"," ORDER BY id");
    $aux=0;
    $listaMembros=[];
    foreach ($membros as $membro) {
    	$listaMembros[$aux]=R::findOne('membros',"id=?",[$membro["id"]]);
    	$aux++;
    }
    return ($listaMembros);
}

function alterarMembro($membro,$id){
    $membroAtualizado=R::load("membros",$id);
    $membroAtualizado["nome"]=$membro['nome'];
    $membroAtualizado['cargo']=$membro['cargo'];
    $membroAtualizado['lattes']=$membro['lattes'];
    $membroAtualizado['imagem']=$membro['imagem'];
    return R::store($membroAtualizado);
}

function deletarMembro($id){
    $membro=R::findOne("membros","id=?",[$id]);
    return R::trash($membro);
}
?>