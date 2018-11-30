<?php
echo $_GET['boton'];
echo $_GET['opciones'];

	if(isset($_GET['boton']) && $_GET['boton'] == 'Eliminar' && isset($_GET['opciones']) && $_GET['opciones'] !="")
	{
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
			echo $qry = "delete from categoria where nombreCategoria='".$_GET['opciones']."'";
			
			echo $rs = mysqli_query($conn,$qry);
		
		header('Location: http://localhost/Proyecto/agregaCategorias.php');

	}
?>