<?php
session_start();
	//verificacion del idP
	if(isset($_GET['idP']) && $_GET['idP']!="")
	{
	
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$idU = $_SESSION['idUsuario'];
		$qry = "insert into comentarios (idUsuario, idProducto, comentario) values (".$idU.",".$_GET['idP'].",'".$_GET['comentario']."')";
		$rs = mysqli_query($conn,$qry);
		header('location: http://localhost/Proyecto/producto.php?idP='.$_GET['idP']);
	}
?>
