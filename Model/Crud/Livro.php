<?php
include_once('Setup.php');

function inserirLivro($livro){
    $novoLivro=R::dispense('livros');
    $novoLivro["membro"]=$livro['membro'];
    $novoLivro['nome']=$livro['nome'];
    $novoLivro['autor']=$livro['autor'];
    $novoLivro['caminho']=$livro['caminho'];
    $x = R::store($novoLivro);
}

function buscarLivro($id){
    return R::findOne('livros','id=?',[$id]);
}

function listarLivro(){
    $livros = R::findAll("livros"," ORDER BY id");
    $aux=0;
    $listaLivros=[];
    foreach ($livros as $livro) {
    	$listaLivros[$aux]=R::findOne('livros',"id=?",[$livro["id"]]);
    	$aux++;
    }
    return json_encode($listaLivros);
}

function alterarLivro($livro,$id){
    $livroAtualizado=R::load("livros",$id);
    $livroAtualizado['membro']=$livro['membro'];    
    $livroAtualizado["nome"]=$livro['nome'];
    $livroAtualizado['autor']=$livro['autor'];
    $livroAtualizado['caminho']=$livro['caminho'];
    return R::store($livroAtualizado);
}

function deletarLivro($id){
    $livro=R::findOne("livros","id=?",[$id]);
    return R::trash($livro);
}
?>