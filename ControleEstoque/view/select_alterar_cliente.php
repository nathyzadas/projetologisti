<?php
session_start();
require "../dao/conexao.php";
include "../valida/verifica_login.php";

if (isset($_POST['select_cliente']) && $_POST['select_cliente'] == "selecione") {

  $_SESSION['select_vazio'] = true;
  header("Location:alterar_cliente.php");
} else {

  $sql_cliente_selecionado = "SELECT * FROM usuarios where id ='$usuario'";
  $result_cliente_selecionado = mysqli_query($conexao, $sql_cliente_selecionado);
  $dados_cliente_selecionado = mysqli_fetch_array($result_cliente_selecionado);

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="../js/sweetalert.min.js"></script>

    <title>Alterar Senha</title>

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

      .cor {
        background-color: seagreen;
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
            <li class="breadcrumb-item active">Alterar Senha</li>
          </ol>

          <!--Formulario-->
          <form method="POST" action="../valida/valida_alter_cliente.php">
          <div class="form-group">
          <div class="form-label-group">
              <input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuário" disabled>
              <label for="inputUsuario">Usuário</label>
            </div>
    </div>
              <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha Atual" required="required">
              <label for="inputPassword">Senha Atual</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="novasenha" class="form-control" placeholder="Nova Senha" required="required">
              <label for="inputPassword">Nova Senha</label>
            </div>
          </div>
              
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                  <label class="form-check-label" for="gridCheck" required>
                    Confirmar alteração
                  </label>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" style="width:15%" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" style="width:15%" name="alterar" class="btn btn-primary"><div style="color:white">Alterar</div></button>
        </div>
        </form>
      </div>
    </div>
    </div>
    </form>

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>Afrotide Hair © Sistema de dados 2023</span>
        </div>
      </div>
    </footer>

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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

<?php 
} 
?>