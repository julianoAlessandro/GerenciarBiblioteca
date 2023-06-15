<?php require_once  'usuario-verifica.php'; ?>
<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];
include_once "classes/conexao.php";
$sql = "SELECT * FROM login WHERE nome = '{$nome}' and senha = '{$senha}'";
$resultado = $conexao ->query($sql);
$linha = $resultado -> fetch();
$usuario_logado = $linha['nome'];

if($usuario_logado == null){
    header('location:usuario-erro.php');
}
else{
    SESSION_START();
    $_SESSION['nome'] = $usuario_logado;
    header('location:index2.php');
}




?>