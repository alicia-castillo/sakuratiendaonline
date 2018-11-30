<?php
	if(isset($_GET['idPr']) && $_GET['idPr']!="")
	{
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		echo $qry = "delete from preguntas where idPregunta=".$_GET['idPr'];
		$rs = mysqli_query($conn,$qry);
	}
	header('location: http://localhost/Proyecto/preguntas.php');
?>
