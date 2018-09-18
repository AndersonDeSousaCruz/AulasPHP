<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == "admin" && $senha == "123"){
	session_start();
	$SESSION['login']= $login;
	$SESSION['senha']= $senha;
	header('Location: ../aula1309_aluno/index.php');
}else{
	header('Location: ../index.php');
}
?>