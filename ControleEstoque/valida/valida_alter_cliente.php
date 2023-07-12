<?php
ob_start();
session_start();
require "../dao/conexao.php";

$usuario = $_POST['usuario'];

$sql_cli = "SELECT * FROM usuarios where id='$usuario'";
$result = mysqli_query($conexao, $sql_cli);
$dados = mysqli_fetch_array($result);


if (isset($_POST['alterar'])) {

    //verificando posts
    if (isset($_POST['novo_nome']) && ($_POST['novo_nome']) != "") {

        $novo_nome = ($_POST['novo_nome']);

        $sql = "UPDATE usuarios SET usuario='$novo_nome' WHERE id ='$usuario'";

        $resultado = mysqli_query($conexao, $sql);

        if (isset($resultado)) {
            $_SESSION['cliente_alterado'] = true;
        }
    }

    if (isset($_POST['nova_senha']) && ($_POST['nova_senha']) != "") {

        $nova_senha = ($_POST['nova_senha']);

        $sql = "UPDATE usuarios SET senha='$nova_senha' WHERE id ='$usuario'";

        $resultado = mysqli_query($conexao, $sql);

        if (isset($resultado)) {
            $_SESSION['cliente_alterado'] = true;
        }
    }

    if (isset($_SESSION['cliente_alterado'])) {
        header('Location:../view/alterar_cliente.php');
    } else {
        $_SESSION['cliente_nao_alterado'] = true;
        header('Location:../view/alterar_cliente.php');
    }
} else {
    echo "<script> alert('Não foi possível fazer a alteração');</script>";
}
