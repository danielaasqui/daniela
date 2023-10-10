<?php

include("conexion.php");

$nom = $_POST["nombres"];
$apell = $_POST["apellido"];
$sala = $_POST["salario"];
$pues = $_POST["puesto"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO empleados(nombre, apellido, salario, puesto) values ('$nom','$apell','$sala','$pues')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE empleados SET nombre='$nom',apellido='$apell',salario='$sala' WHERE puesto=$pues";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM empleados WHERE codigo=$apell";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>