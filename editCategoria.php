<?php
echo $_POST['opciones'];
echo $_POST['txtCategoria'];
	if(isset($_POST['opciones']) && $_POST['opciones'] != "" && isset($_POST['txtCategoria']) && $_POST['txtCategoria'] != "")
	{
		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		echo $qry = "update categoria set nombreCategoria='".$_POST['txtCategoria']."' where nombreCategoria='".$_POST['opciones']."'";
		$rs = mysqli_query($conn,$qry);
	}
	header('Location: http://localhost/Proyecto/agregaCategorias.php');
?>