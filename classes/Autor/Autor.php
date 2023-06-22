<?php
class Autor {
    public $id_autor;
    public $nome;
    public $nacionalidade;
    public $data;
    public function __construct($id_autor = false){
        if($id_autor){
            $this -> id_autor=$id_autor;
            $this -> carregar();
        }
     }

    public function inserir(){
    $sql = "INSERT INTO autores(nome,nacionalidade,data) VALUES(
        '".$this ->nome."',
         '".$this ->nacionalidade."',
         '".$this ->data."'
        
        )";
        include_once "classes/conexao.php";
        $conexao -> exec($sql);
        echo "registro gravado com sucesso";
    }

    public function listar(){
    $sql = "SELECT * FROM autores";
    include_once "classes/conexao.php";
    $resultado = $conexao -> query($sql);
    $lista = $resultado ->fetchALL();
        return $lista;
    }

    public function excluir(){
        $sql = "DELETE FROM autores WHERE id_autor = ".$this -> id_autor;
        include_once "classes/conexao.php";
        $conexao -> exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM autores WHERE id_autor = " . $this->id_autor;
        include_once "classes/conexao.php";
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->nacionalidade = $linha['nacionalidade'];
        $this->data = $linha['data'];
    
        
        
    }

    public function atualizar()
    {
        $sql = "UPDATE autores SET
        nome = '".$this->nome."',
        nacionalidade = '".$this->nacionalidade."',
        data = '".$this->data."'
         WHERE id_autor = '".$this->id_autor."'";
             $conexao = new PDO('mysql:host=127.0.0.1;dbname=usuario','root','');
                    $conexao->exec($sql);
                
    }

}
