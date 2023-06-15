<?php
require_once "classes/Autor.php";
$id_autor = $_POST['id_autor'];
$autor = new Autor($id_autor);
$autor->id_autor = $_POST['id_autor'];
$autor->nome = $_POST['nome'];
$autor->nacionalidade = $_POST['nacionalidade'];
$autor->data = $_POST['data'];
$autor->atualizar();
header('Location: autores-listar.php');

?>

