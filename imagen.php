<?php
//verificacion del idD
if(isset($_GET['idD']) && $_GET['idD']!="")
{
	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn)
		echo "No fue posible conectar con la BD";
	
	$qry = "Select tipo, imagen from producto where idProducto=" .$_GET['idD'];
	$rs = mysqli_query($conn,$qry);
	$image = mysqli_fetch_object($rs);
	header('Content-type: '.$image->tipo);
	echo $image->imagen; 
}
?>