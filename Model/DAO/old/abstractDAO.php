<?php
abstract class AbstractDao{
    protected function criaConexao(){
        $config="host=localhost port=5432 dbname=geoma user=postgres password=postgres";
        $conn = pg_connect($config) or die("Não foi possivel conectar ao Banco!");
        return $conn; 
    }
    abstract public function listar(int $limit, int $offset);
    abstract public function buscar($id);
    abstract public function inserir($obj);
    abstract public function deletar($obj); 
    abstract public function alterar($obj); 
}
    
?>