<?php
	if(isset($_GET['idC']) && $_GET['idC']!="" && isset($_GET['idP']) && $_GET['idP']!="" && isset($_GET['comentario']) && $_GET['comentario']!="" )
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		$qry = "update comentarios set comentario = '".$_GET['comentario']."'  where idComentario = ".$_GET['idC'];
		$rs = mysqli_query($conn,$qry);
	}
	header('location: http://localhost/Proyecto/producto.php?idP='.$_GET['idP'].'#'.$_GET['idC']);
?>
