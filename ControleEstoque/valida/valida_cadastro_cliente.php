<?php
ob_start();
session_start();
require "../dao/conexao.php";

if (isset($_POST['cadastrar_cliente'])) {

    $usuario= ($_POST['usuario']);
    $senha = ($_POST['senha']);
    

    //inserir no banco.
    $sql = "INSERT INTO usuarios (usuario,senha)
          VALUE ('$usuario','$senha')";

    //Incluir
    $resultado = mysqli_query($conexao, $sql);

    if (!isset($resultado)){
        $_SESSION['cliente_nao_cadastrado'] = true;
        header('Location:../view/lista_clientes.php');

    } else {
        $_SESSION['cliente_cadastrado'] = true;
        header('Location:../view/lista_clientes.php');
        exit();
        
    }
} else {
    echo "<script> alert('Não foi possível fazer o cadastro');</script>";
}
