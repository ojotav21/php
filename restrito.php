<?php 
//Restrito

session_start(); // estartou a Sessão
if (
	(!isset($_SESSION['id'])== true) &&
	(!isset($_SESSION['nome'])== true) &&
	(!isset($_SESSION['email'])== true)){

	//session_destroy()
	unset($_SESSION['id']);
	unset($_SESSION['nome']);
	unset($_SESSION['email']);

	header('Location: index.html');
}

	echo "Página Restrita!!!!!!!";

	echo "(Mas nem tanto assim!!)";


?>

<a href="sair.php"class = "button" >SAIR</a>