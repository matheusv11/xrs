<?php
session_start();
include("conexao.php");


$sql= "SELECT SUM(`VALOR`) as total FROM `DOACAO`";
$result= mysqli_query($con, $sql);
$row=mysqli_fetch_array ($result,MYSQLI_NUM);
print_r ($row[0]);

mysqli_close($con);

// $query= "SELECT SUM(VALOR) FROM doacao";
// mysqli_query($con, $query);
// if(mysqli_query($con, $query)){
//     $result =  mysqli_fetch_array($con, $query);
//     mysqli_close($con);
// }else{
//     die("Error:".$con->error);
//     mysqli_close($con);
// }
// while ($result) {
//     //restante do codigo
// }

?>

	