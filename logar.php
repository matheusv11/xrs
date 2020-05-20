<?php
session_start();
include('conexao.php');


$email= mysqli_real_escape_string($con, $_POST["email"]);
$senha= mysqli_real_escape_string($con, $_POST["senha"]);

if (empty($email) ||   empty($senha)){
	header('Location: login.php');
	exit();
}

$query= "select ID_USUARIO, EMAIL, SENHA from USUARIO where EMAIL= '$email' and SENHA= '$senha'";

$result= mysqli_query($con, $query);
$row= mysqli_num_rows($result);

if ($row==1) {
	$_SESSION['usuario']= $email;
	header('Location: doacao.php');
	exit();
}

else{
	$_SESSION['nao_registrado']= true;
	header('Location: cadastro.php');
	exit();
}

?>