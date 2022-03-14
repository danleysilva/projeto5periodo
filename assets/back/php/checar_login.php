<?php 

session_start();

if (isset($_SESSION['cpf'])) {
	
} else {
	header('Location:tela_login.php');
}











 ?>