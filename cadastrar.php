<?php

session_start();
include('conexao.php');
$nome= mysqli_real_escape_string($con, $_POST["nome"]);
$email= mysqli_real_escape_string($con, $_POST["email"]);
$senha= mysqli_real_escape_string($con, $_POST["senha"]);
$confirmar= mysqli_real_escape_string($con, $_POST["confirmar"]);


$sql= "select count(*) as total from USUARIO where EMAIL= '$email'";
$result= mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);

if ($senha!=$confirmar) {
	$_SESSION['senha_invalida']= true;
	header('Location: cadastro.php');
	exit();
}

if ($row['total']== 1) {
	$_SESSION['usuario_existe']= true;
	header('Location: cadastro.php');
	exit();
}


$sql= "INSERT INTO USUARIO (NOME, SENHA, EMAIL) VALUES ('$nome','$senha' ,'$email')";

if ($con->query($sql) === TRUE) {
	$_SESSION['status_cadastro']= true;

}

$con->close();
header('Location: cadastro.php');
exit();
?>