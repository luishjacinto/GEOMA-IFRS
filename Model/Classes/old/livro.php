<?php
class livro{
    
    private $id;
    private $idMembro;
    private $nome;
    private $autor;
    private $caminho;

    public function __construct($idMembro,$nome,$autor,$caminho){
        $this->idMembro = $idMembro;
        $this->nome = $nome;
        $this->autor = $autor;
        $this->caminho = $caminho;
    }
    //GET
    public function getId(){
        return $this->id;
    }
    public function getIdMembro(){
        return $this->idMembro;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getCaminho(){
        return $this->caminho;
    }

    //SET
    public function setId($id){
        $this->id = $id;
    }
    public function setIdMembro($idMembro){
        $this->idMembro = $idMembro;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setCaminho($caminho){
        $this->caminho = $caminho;
    }

}
?>