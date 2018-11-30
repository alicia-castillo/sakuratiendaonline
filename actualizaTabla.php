<?php
session_start();
	if(isset($_GET['boton']) && ($_GET['boton'] == 'guardar' || $_GET['boton'] == 'pagar'))
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		for($i = 1; isset($_GET['c'.$i.'']) && isset($_GET['p'.$i.'']);$i++)
		{
			$qry = "update venta set cantidad = ".$_GET['c'.$i.''].", subTotal = ".$_GET['c'.$i.'']." * (select precio from producto where idProducto = ".$_GET['p'.$i.''].") where idProducto = ".$_GET['p'.$i.'']." and idUsuario =".$_SESSION['idUsuario'];
			$rs = mysqli_query($conn,$qry);
		}
		if($_GET['boton'] == 'guardar')
		{
			header('Location: http://localhost/Proyecto/vestidos.php');
		}
		else
		{
			header('Location: http://localhost/Proyecto/enviaCorreo.php');
		}
	}
	else
		header('Location: http://localhost/Proyecto/carritoCompras.php');
?>
