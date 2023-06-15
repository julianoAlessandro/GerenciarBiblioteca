<?php
require_once "classes/Autor.php";
$id_autor = $_GET['id_autor'];
$autor = new Autor ($id_autor);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin:0;
            padding: 0;

        }
        body{
        
            background-color: #CCCCCC;
           
        
        }
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        .corpo2{
            width:100%;
            height: 80%;
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .inputs{
            margin: 3%;
    cursor: text;
    width: 50%;
    padding: 2.5px;
    border: 0;
    border-bottom: 2px solid  black;
    outline: 0;
    background: none;
        }
        select {
            width: 70%;
            color:gray;
        }
        .enviar2{
            position: relative;
            left: 20%;
            background-color: gray;
            color:white;
            border-radius: 8px;
            width: 70%;
        }
        .enviar2:hover{
            background-color: red;
        }
        label{
            color:white;
        }
    </style>
    <title>Atualização informação autor</title>

</head>
<body>
<h1>Atualizar informações autores</h1>
    <h3>Atualizar informações do autor</h3>
<div class="corpo2">
    <form action="autor-editar-gravar.php" method="POST">
        <input type="hidden" name="id_autor" value="<?= $autor->id_autor ?>">
        <label for="autor">Informe o nome do Autor:</label>
        <input class="inputs" type="text" name="nome" value="<?= $autor->nome ?>">
        <br><br>
        <label for="autor">Informe a nacionalidade do autor:</label>
        <input class="inputs" type="text" name="nacionalidade" value="<?= $autor->nacionalidade ?>">
        <br><br>
        <label for="autor">Informe a data de nascimento do Autor:</label>
        <input  class="inputs" type="date" name="data" value="<?= $autor->data ?>">
        <br><br>                      
        <input class="enviar2" type="submit" value="GRAVAR DADOS">
    </div>
  
</body>
</html>