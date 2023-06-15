<?php

require_once "classes/Livro.php";
$id_livro = $_POST['id_livro'];
$livro = new Livro($id_livro);
$livro->id_livro = $_POST['id_livro'];
$livro->titulo = $_POST['titulo'];
$livro->atualizar();
header('Location: livros-listar.php');

?>

