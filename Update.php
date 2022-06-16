<?php
echo 'start of php save';
if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])){
	$conn = mysqli_connect('localhost','root','nimda','webdevelopment') or die("connection Failed: " .mysqli_connect_error());
	if( isset($_POST['IDCliente']) && isset($_POST['name']) && isset($_POST['telefone']) && isset($_POST['endereco']) && isset($_POST['cidade']) && isset($_POST['desejo'])){
	$IDCliente= $_POST['IDCliente'];
	$name= $_POST['name'];
	$telefone= $_POST['telefone'];
	$endereco= $_POST['endereco'];
	$cidade= $_POST['cidade'];
	$desejo= $_POST['desejo'];
	
	$sql= "Update customer set `Name` = '$name',`Phone` = '$telefone',`Address` = '$endereco' , `City` = '$cidade',`Desejo` = '$desejo' where `ID` = $IDCliente;";
	$query = mysqli_query($conn,$sql);
	mysqli_close($conn);
	}
	if($query){
		echo 'Entry sucess';
	}
	else{
		echo 'Error on query';
	}
}
?>