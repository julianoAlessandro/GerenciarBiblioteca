<?php
class Livro {
    public $id_livro;
    public $titulo;
    public $Genero;
    public $Autor;
     public function __construct($id_livro = false){
        if($id_livro){
            $this -> id_livro=$id_livro;
            $this -> carregar();
        }
     }
    public function inserir(){
    $sql = "INSERT INTO livro(titulo,Genero,Autor) VALUES(
        '".$this ->titulo."',
         '".$this ->Genero."',
         '".$this ->Autor."'
        
        )";
        include_once "classes/conexao.php";
        $conexao -> exec($sql);
        echo "registro gravado com sucesso";
    }

    public function listar(){
    $sql = "SELECT * FROM livro";
    include_once "classes/conexao.php";
    $resultado = $conexao -> query($sql);
    $lista = $resultado ->fetchALL();
        return $lista;
    }

    public function excluir()
{
    $sql = "DELETE FROM livro WHERE id_livro = ".$this->id_livro;
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=usuario','root','');
    $conexao->exec($sql);
}


    public function carregar()
{
    $sql = "SELECT * FROM livro WHERE id_livro = " . $this->id_livro;
    include_once "classes/conexao.php";
    $resultado = $conexao->query($sql);
    $linha = $resultado->fetch();
    $this->titulo = $linha['id_livro'];
    $this->titulo = $linha['titulo'];
    $this->titulo = $linha['Genero'];
    $this->titulo = $linha['Autor'];
 
    
}

    public function atualizar()
    {
        $sql = "UPDATE livro SET
        titulo = '".$this->titulo."'
         WHERE id_livro = '".$this->id_livro."'";
             $conexao = new PDO('mysql:host=127.0.0.1;dbname=usuario','root','');
                    $conexao->exec($sql);
                
    }
}
