<?php
session_start();
	if(isset($_GET['idP']) && $_GET['idP']!="" && isset($_SESSION['idUsuario']) && $_SESSION['idUsuario']!="")
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "INSERT INTO venta(idProducto, idUsuario,cantidad,subTotal) VALUES (".$_GET['idP'].",".$_SESSION['idUsuario'].",1,(SELECT precio from producto where idProducto = ".$_GET['idP']."))";
		$rs = mysqli_query($conn,$qry);
	}
	header('Location: http://localhost/Proyecto/vestidos.php');

?>