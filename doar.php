<?php

session_start();
include('conexao.php');

$valor= mysqli_real_escape_string($con, $_GET["valor"]);
$email= $_SESSION['usuario'] ;


$sql= "INSERT INTO DOACAO (VALOR,EMAIL) VALUES ('$valor', '$email')";
$result= mysqli_query($con, $sql);


$con->close();
header('Location: index.html');
exit();
?>


