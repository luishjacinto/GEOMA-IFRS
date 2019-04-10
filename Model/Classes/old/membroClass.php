<?php
class Membro{
    
    private $id;
    private $nome;
    private $cargo;
    private $lattes;
    private $imagem;

    public function __construct($nome,$cargo,$lattes){
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->lattes = $lattes;
    }
    //GET
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getLattes(){
        return $this->lattes;
    }
    public function getImagem(){
        return $this->imagem;
    }
    //SET
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
    public function setLattes($lattes){
        $this->lattes = $lattes;
    }
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
}
?>