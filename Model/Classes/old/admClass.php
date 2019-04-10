<?php
class Administrador{
    
    private $id;
    private $nickname;
    private $email;
    private $senha;

    public function __construct($nickname,$email,$senha){
        $this->nickname = $nickname;
        $this->email = $email;
        $this->senha = $senha;
    }
    //GET
    public function getId(){
        return $this->id;
    }
    public function getNickname(){
        return $this->nickname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    //SET
    public function setId($id){
        $this->id = $id;
    }
    public function setNickname($nickname){
        $this->nickname = $nickname;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
}
?>