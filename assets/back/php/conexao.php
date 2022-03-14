<?php 

$maquina = "localhost"; // maquina ou host
$usuario = "root"; // user
$senha = "";
$bancodedados = "login_top";

$conexao = mysqli_connect($maquina, $usuario, $senha, $bancodedados);

mysqli_set_charset($conexao,'utf8');

if ($conexao) {
    
} else {
	echo "FALHA";
}


 ?>