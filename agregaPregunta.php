<?php
session_start();
	//verificacion del idUsuario
	if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] !="")
	{
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
				
		echo $qry = "insert into preguntas (idUsuario, pregunta) values (".$_SESSION['idUsuario'].",'".$_GET['txtPregunta']."')";
		echo $rs = mysqli_query($conn,$qry);
		header('location: http://localhost/Proyecto/preguntas.php');
	}
?>
