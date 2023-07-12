 <!-- select do código -->
 <?php
  require "../dao/conexao.php";

  if(isset($_POST['cadastrar_cliente'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];
  
    // Verifica se as senhas coincidem
    if($senha != $confirmarSenha) {
      echo "As senhas não coincidem. Por favor, tente novamente.";
      exit;
    }
  
    // Restante do seu código de validação e inserção no banco de dados...
  }

  $sql_cliente = "SELECT id FROM usuarios ORDER BY id DESC LIMIT 1";
  $result_cliente = mysqli_query($conexao, $sql_cliente);
  $dados_cliente = mysqli_fetch_array($result_cliente);
  ?>
  
 <!-- Modal -->
 <div class="modal fade bd-example-modal-lg" id="modal_cadastrar_cliente" tabindex="-1" role="dialog" aria-labelledby="modal_cadastrar_clienteTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div style="background-color:007bff;" class="modal-header">
         <h5 class="modal-title" style="color:white;" id="modal_cadastrar_clienteTitle">Cadastrar novo Cliente:</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <!--Formulario-->
         <form method="POST" action="../valida/valida_cadastro_cliente.php">
          <div class="form-label-group">
              <input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuário" required="required" autofocus="autofocus">
              <label for="inputUsuario">Usuário</label>
            </div>
          </div>
              <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required="required">
              <label for="inputPassword">Senha</label>
            </div>
          </div>
              </div>
             </div>
             <div class="form-group">
             <div class="form-label-group">
               <input type="password" id="inputConfirmarSenha" name="confirmar_senha" class="form-control" placeholder="Confirmar Senha" required="required">
               <label for="inputConfirmarSenha">Confirmar Senha</label>
             </div>
           </div>
             <div class="form-group">
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="gridCheck" required>
                 <label class="form-check-label" for="gridCheck" required>
                   Confirmar Cadastro
                 </label>
               </div>
             </div>
           </div>
       </div>
       <div class="modal-footer">
         <button type="button" style="width:15%;" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button type="submit" style="width:15%;" name="cadastrar_cliente" class="btn btn-primary"><div style="color:white">Cadastrar</div></button>
       </div>
       </form>
     </div>
   </div>
 </div>
 </form>