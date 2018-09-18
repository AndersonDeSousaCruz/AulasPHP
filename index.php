<?php
	session_start();
	if($_SESSION['loguin'] = null){
		header("location:../index.php");
	}
	else{
		echo "Bem vindo";
	}
 ?>
 <br>
 <a href="./sair.php">Sair</a>