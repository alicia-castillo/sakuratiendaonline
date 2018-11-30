<?php
	echo $_POST['opciones'];
	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn)
	{
		echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}

	//validacion de los datos del formulario
	if(!isset($_POST['txtProducto']) || !isset($_POST['txtDescripcion']) || 
		empty($_FILES['txtImagen']['tmp_name']) || !isset($_POST['txtPrecio']) || 
		!isset($_POST['txtTalla']) || !isset($_POST['txtExistencia']) || !isset($_POST['opciones']))
	{
		header("location: http://localhost/Proyecto/agregaProds.php");
	}
	
	$Name_tmp = $_FILES['txtImagen']['tmp_name'];
	$Name = $_FILES['txtImagen']['name'];
	$size = $_FILES['txtImagen']['size'];
	$type = $_FILES['txtImagen']['type'];
	extract($_POST);
	
	$openFile = fopen($Name_tmp,"r");
	$contenido = fread($openFile,$size);
	fclose($openFile);
	$contenido = addslashes($contenido);
		
	//Consulta SQL
	echo $qry = "insert into producto (nombreProducto, idCategoria, descripcion, precio, existencia, talla, imagen,tipo) values('$txtProducto',(select idCategoria from categoria where nombreCategoria = '".$_POST['opciones']."'),'$txtDescripcion','$txtPrecio','$txtExistencia','$txtTalla','$contenido','$type')";
	$rs = mysqli_query($conn,$qry);
	
	if(!rs)
	{
		echo "No fue posible agregar el producto" . mysqli_error($conn);
		header("location: http://localhost/Proyecto/agregaProds.php");
	}
	else 
		header("location: http://localhost/Proyecto/agregaProds.php");

?>
