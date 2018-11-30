<?php
session_start();
	if($_SESSION['rol'] == 'Administrador')
	{
	
		if(isset($_GET['idPr']) && $_GET['idPr'] != "" && isset($_GET['txtRespuesta']) && $_GET['txtRespuesta'] != "")
		{
			$conn = mysqli_connect("localhost","root","mysql","Proyecto");
			if(!$conn)
			{
				echo "No fue posible conectarse a la BD" . mysqli_error($conn);
			}
			
			echo $qry = "update preguntas set respuesta = '".$_GET['txtRespuesta']."' where idPregunta = ".$_GET['idPr'];
			echo $rs = mysqli_query($conn,$qry);
		}
	}
	header('Location: http://localhost/Proyecto/preguntas.php#'.$_GET['idPr']);
?>