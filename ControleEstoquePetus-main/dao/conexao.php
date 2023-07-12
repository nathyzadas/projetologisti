<?php 
//Criando o arquivo de conexão
$host = "localhost";
$usuario = "root";
$senha = "";
$banco="id12834938_estoque";

$conexao= mysqli_connect($host,$usuario,$senha,$banco) or die("Não foi possivel conectar ao banco");
mysqli_select_db($conexao,$banco) or die("Não foi possivel encontrar esse banco");



//usuario nath 
// senha 123

///   INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES (1, 'gabriela', md5( digite sua senha ));



?>


