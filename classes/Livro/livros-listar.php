<?php
require_once "classes/Livro.php";
$livro = new Livro();
$lista = $livro->listar();
?>
<!DOCTYPE html>
<html lang="en">
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
        .navegar{
         
            width:100%;
            height: 80%;
            display:flex;
            justify-content: space-around;
            align-items: center;
        }
        h1{
            color:white;
            text-align: center;
        }
        h3{
            text-align: center;

        }
        .tabela{
            width: 100%;
         height: 112%;
        display: flex;
        justify-content: center;
         align-items: center;
       
        }
        .emoji{
            width: 23px;
            height: 23px;
        }

        a{
            color:blue;
            text-decoration: none;
        }
        li{
            color:white;
        }
        table{
            background-color: #ADD8E6;
        }
        th{
            color:gray;
        }
    </style>

    <title>Listar livros</title>
</head>
<body>
<div class="navegar">

<a href="livros.html">Novo Livro</a><br>
 <a href="index2.php">Gerenciar Biblioteca</a>
 </div>
    <h1>Biblioteca</h1>
    <i><h3>Listar livro</h3></i>
    <div class="tabela">
    <table border="1">
        <tr>
            <th>id_livro</th>
            <th>titulo</th>
            <th>Genero</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $linha): ?>
            <tr>
                <td><?php echo $linha['id_livro'] ?></td>
                <td><?php echo $linha['titulo'] ?></td>
                <td><?php echo $linha['Genero'] ?></td>
                <td><?php echo $linha['Autor'] ?></td>
                <td>
                <a href="livros-excluir.php?id_livro=<?= $linha['id_livro'] ?>"><img class="emoji" src="img/excluir (1).PNG"></a>
                <a href="livros-editar.php?id_livro=<?= $linha['id_livro'] ?>"><img class="emoji" src="img/atualizada.PNG"></a>
                
                </td>
            </tr>
        <?php endforeach ?>
    </table>
        </div>
   
</body>
</html>
