<?php
require_once "classes/Autor.php";
$id_autor = $_GET['id_autor'];
$autor = new Autor($id);
$autor -> excluir();
header('location:autores-listar.php');
?>