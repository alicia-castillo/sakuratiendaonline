<?php

	if(isset($_POST['idP']) && $_POST['idP'] != "" && 
		isset($_POST['txtProducto']) && $_POST['txtProducto'] != "" && isset($_POST['txtDescripcion']) && $_POST['txtDescripcion'] != "" &&
		isset($_POST['opciones']) && $_POST['opciones'] != "" && 
		isset($_POST['txtPrecio']) && $_POST['txtPrecio'] != "" && isset($_POST['txtTalla']) && $_POST['txtTalla'] != "" && 
		isset($_POST['txtExistencia']) && $_POST['txtExistencia'] != "")
	{
	
	if(!empty($_FILES['txtImagen']['tmp_name'])){	
		$Name_tmp = $_FILES['txtImagen']['tmp_name'];
		$Name = $_FILES['txtImagen']['name'];
		$size = $_FILES['txtImagen']['size'];
		$type = $_FILES['txtImagen']['type'];
		extract($_POST);
		
		$openFile = fopen($Name_tmp,"r");
		$contenido = fread($openFile,$size);
		fclose($openFile);
		$contenido = addslashes($contenido);
		$text1 = ",imagen = '".$contenido."',tipo = '".$type."'";	
	}
	else $text1 = "";

		$conn = mysqli_connect("localhost","root","mysql","Proyecto");
		if(!$conn)
		{
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
		}
		
		
		$qry = "update producto set nombreProducto = '".$_POST['txtProducto']."', descripcion = '".$_POST['txtDescripcion']."',precio = ".$_POST['txtPrecio'].", existencia = ".$_POST['txtExistencia'].",  talla = '".$_POST['txtTalla']."' ".$text1." , idCategoria = (select idCategoria from categoria where nombreCategoria = '".$_POST['opciones']."') where idProducto =".$_POST['idP'];
		$rs = mysqli_query($conn,$qry);
		
		header("location: http://localhost/Proyecto/config.php");
	}
?>
