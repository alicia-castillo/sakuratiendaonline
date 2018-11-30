<?php
	if(!isset($_GET['txtCategoria']))
	{
		//header("location: http://localhost/Proyecto/agregaProds.php");
		echo "1";
	}
	if($_GET['txtCategoria'] == "")
	{
		//header("location: http://localhost/Proyecto/agregaProds.php");
		echo "2";
	}
	
	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn)
	{
		echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}
	
	//Consulta SQL
	echo $qry = "insert into categoria (nombreCategoria) values('".$_GET['txtCategoria']."')";
	
	$rs = mysqli_query($conn,$qry);
	
	if(!rs)
	{
		echo "No fue posible agregar el producto" . mysqli_error($conn);
		//header("location: http://localhost/Proyecto/agregaProds.php");
	}
	else
	{
		header("location: http://localhost/Proyecto/agregaCategorias.php");
		//echo "si lo hice";
	}

?>
