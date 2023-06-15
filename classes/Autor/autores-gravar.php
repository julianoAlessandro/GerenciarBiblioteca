<?php
require_once "classes/Autor.php";
$autor = new Autor();
$autor ->nome = $_POST['nome'];
$autor ->nacionalidade = $_POST['nacionalidade'];
$autor ->data = $_POST['data'];
$autor -> inserir();



?>
<a href="autores-listar.php">Visualizar auotres cadastrados</a>