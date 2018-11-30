<?php
	if(isset($_GET['idP']) && $_GET['idP']!="" && isset($_GET['idV']) && $_GET['idV']!="")
	{
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "delete from venta where idProducto = ".$_GET['idP'];
		$rs = mysqli_query($conn,$qry);
	}
	header('Location: http://localhost/Proyecto/carritoCompras.php');
?>
