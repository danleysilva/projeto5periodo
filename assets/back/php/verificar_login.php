<?php 

include "conexao.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE cpf_usuario='$cpf' AND senha_usuario='$senha'";

$resultado = mysqli_query($conexao,$sql);
$quantidade= mysqli_num_rows($resultado);

if ($quantidade == 1) {
	session_start();
	$_SESSION['cpf'] = $cpf;
	header('Location:index.php');
} else{
	header('Location:tela_login.php');
}


/*echo "$quantidade";*/

 ?>
