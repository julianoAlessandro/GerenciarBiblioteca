<?php
require_once "classes/Livro.php";
$id_livro = $_GET['id_livro'];
$livro = new Livro ($id_livro);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização do livro</title>
    <style>
        h1{
            text-align: center;
            color:WHITE;
            font-size: 32px;
            
        }
        h3{
            text-align: center;
        }
        .formulario{
            width: 100%;
         height: 112%;
        display: flex;
        justify-content: center;
         align-items: center;
       
        }
        .enviar{
            position: relative;
            left:30%;
            border-radius: 6px;
            width:50%;
            height:40%;
            background-color: #CCCCCC;
        }
        body{
            background-image: url(img/livro.JPG);
            background-size: cover;
           
 
        }
        label{
            color:white;
            font-size: 24px;
        }
        .input{
            width: 40%;
         padding: 2.5px;
         border: 0;
            border-bottom: 2px solid  gray;
            outline: 0;
            background: none;
            color:white;
            font-size: 24px;

        }
    </style>
</head>
<body>
<h1>Atualizando titulo do Livro</h1>
    
    <div class="formulario">
    <form action="livro-editar-gravar.php" method="POST">
        <input type="hidden" name="id_livro" value="<?= $livro->id_livro ?>">
        <label for="livro">Novo titulo do livro:</label>
        <input class="input" type="text" name="titulo" value="<?= $livro->titulo ?>">
        <br><br>                      
        <input type="submit" class="enviar" value="GRAVAR DADOS">
    </div>

  
</body>
</html>