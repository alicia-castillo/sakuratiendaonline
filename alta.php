<?php
	//validacion de los datos del formulario
	if(!isset($_GET['txtUsuario']) || !isset($_GET['txtPwd']) || !isset($_GET['txtNombre']) || !isset($_GET['txtCorreo']))
		header("location: http://localhost/Proyecto/index.php");
	
	if($_GET['txtUsuario'] =="" || $_GET['txtPwd'] =="" || $_GET['txtNombre'] =="" || $_GET['txtCorreo'] =="")
		header("location: http://localhost/Proyecto/index.php");
		
	//Dar de alta el registro
	
	//Conexion a la BD
	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn)
	{
		echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}
	
	//Consulta sql
	$qry= "insert into usuario (nombreUsuario, Nombre, Email, Password, Rol) values('".$_GET['txtUsuario']."','".$_GET['txtNombre']."','".$_GET['txtCorreo']."','".$_GET['txtPwd']."','normalUser')";
	
	//Evaluamos la consulta
	$rs = mysqli_query($conn,$qry);
	
	if(!rs)
		echo "El alta de usuario no fue posible" . mysqli_error($conn);
	else
		header("location: http://localhost/Proyecto/index2.php");
?>
