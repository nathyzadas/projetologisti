<?php
session_start();
require "../dao/conexao.php";
include "../valida/verifica_login.php";

$sql_lista_cliente = "SELECT * FROM usuarios";
$result_lista_cliente = mysqli_query($conexao, $sql_lista_cliente);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administradores</title>

  <script src="../js/sweetalert.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <style>
    .img {
      margin-top: 10%;
      margin-left: 10%;
      width: 20%;
    }

  </style>

</head>

<body id="page-top">
  <?php
  include_once "nav.php";
  ?>

  <div id="wrapper">

    <?php
    include_once "menu.php";
    ?>
    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="painel.php">Painel Principal</a>
          </li>
          <li class="breadcrumb-item active">Configurações</li>
        </ol>

        <!-- Alerts-->
        <?php if (isset($_SESSION['cliente_cadastrado'])) { ?>
          <script>
            swal("Feito", "Administrador cadastrado com sucesso!", "success")
          </script>
        <?php

          unset($_SESSION['cliente_cadastrado']);
        } ?>
        <?php if (isset($_SESSION['cliente_nao_cadastrado'])) { ?>
          <script>
            swal("Ops", "Administrador não pôde ser cadastrado!", "error")
          </script>
        <?php

          unset($_SESSION['cliente_nao_cadastrado']);
        } ?>

          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Configurações 
            <?php require "modais/modal_cadastrar_fornecedor.php"?>
            <button style="" type="button" data-toggle="modal" data-target="#modal_cadastrar_fornecedor" class="btn btn-outline-primary fixed-right"> <i class="fa fa-user-plus" aria-hidden="true"></i> Cadastrar</button>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Usuário</th>
                    <th>Senha</th>
                    <th>Opções</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Usuário</th>
                    <th>Senha</th>
                    <th>Opções</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php while ($dados_lista_cliente = mysqli_fetch_array($result_lista_cliente)) {

                  echo "<tr>";
                  echo "<td> " . $dados_lista_cliente['id'] . "</td>";
                  echo "<td> " . $dados_lista_cliente['usuario'] . "</td>";
                  echo "<td> " . $dados_lista_cliente['senha'] . "</td>";
                  echo "<td> " . "<a href='select_alterar_cliente.php?id=".$dados_lista_cliente['id']."' type='button' class='btn btn-outline-warning btn-sm 'data-toggle='tooltip' data-placement='top' title='Alterar' style='width:20%;'><i class='fa fa-cogs' aria-hidden='true'></i></a>"." "."<a href='' type='button' class='btn btn-outline-danger btn-sm' data-toggle='tooltip' data-placement='top' title='Excluir' style='width:20%;'><i class='fa fa-window-close' aria-hidden='true'></i></a>"."</td>";
                  echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"> Atualizado em :
            <?php date_default_timezone_set('America/Sao_Paulo');
            $date = date('d-m-y H:i');
            echo $date; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>Afrotide Hair © Sistema de dados 2023</span>
        </div>
      </div>
    </footer>
  </div>
  </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>