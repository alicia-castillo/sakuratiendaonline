<?php
	//Coneccion a la BD
	if(isset($_GET['idC']) && $_GET['idC']!="" && isset($_GET['idP']) && $_GET['idP']!="")
	{
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "delete from comentarios where idComentario = ".$_GET['idC'];
		$rs = mysqli_query($conn,$qry);
	}
	header('location: http://localhost/Proyecto/producto.php?idP='.$_GET['idP']);
?>
