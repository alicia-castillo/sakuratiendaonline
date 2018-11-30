<?php
session_start();
	if(isset($_GET['idPr']) && $_GET['idPr']!="" && isset($_GET['pregunta']) && $_GET['pregunta']!="" && isset($_SESSION['idUsuario']) && $_SESSION['idUsuario']!="")
	{
		echo 'aaa';
		//Coneccion a la BD
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		echo $qry = "update preguntas set pregunta = '".$_GET['pregunta']."' where idPregunta = ".$_GET['idPr']."";
		$rs = mysqli_query($conn,$qry);
	}
	header('location: http://localhost/Proyecto/preguntas.php?idPr='.$_GET['idPr'].'#'.$_GET['idPr']);
?>
