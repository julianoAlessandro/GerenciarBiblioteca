<?php
require_once "classes/Livro.php";
$id_livro = $_GET['id_livro'];
$livro = new Livro($id_livro);
$livro -> excluir();
header('location:livros-listar.php');



?>