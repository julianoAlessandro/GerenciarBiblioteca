<?php
require_once "classes/Autor.php";
$autor = new Autor();
$lista = $autor -> listar();
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
        a:hover{
            color:red;
        }
    </style>
    <title>Autores-Listar</title>
</head>
<body>
    <div class="navegar">
<a href= "autores.html">Novo Autor</a><br>
    <a href="index2.php">Gerenciar Biblioteca</a>
    </div>
    <h1>Biblioteca</h1>
    <h3>Listar Autores </h3>
    <div class="tabela">
    <table border="1">
    <tr>
    <th>id_autor</th>
    <th>Nome</th>
    <th>Nacioalidade</th>
    <th>Data</th>
    <th>Ações</th>
    </tr>
    <tr>
      
    <?php foreach($lista as $linha): ?>
        <td><?php echo $linha['id_autor'] ?></td>
        <td><?php echo $linha['nome'] ?></td>
        <td><?php echo $linha['nacionalidade'] ?></td>
        <td><?php echo $linha['data'] ?></td>
        <td>
        <a href="autores-excluir.php?id_autor=<?= $linha['id_autor'] ?>"><img class="emoji" src="img/excluir (1).PNG"></a>
        <a href="autores-editar.php?id_autor=<?= $linha['id_autor'] ?>"><img class="emoji" src="img/atualizada.PNG"></a>
    </td>
    </tr>
   

    <?php endforeach ?>
    </table>
    </div>
   
    
    
</body>
</html>