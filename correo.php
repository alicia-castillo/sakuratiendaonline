<?php
session_start();

	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn){
			echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}
	$qry = "select v.*,p.nombreProducto,p.precio from venta v inner join producto p on v.idProducto = p.idProducto where idUsuario = ". $_SESSION['idUsuario'];
	$rs = mysqli_query($conn,$qry);
	$Total = 0;

	$body = '<!DOCTYPE html>
				<html>
					<head>
						<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
						<title>Untitled 1</title>
					</head>
					<body>
						<div class="correo">
							<h1>Nombre de usuario</h1>
							<h1>Confirmacion de pago de los siguientes artículos:</h1>
							<div>';
							
	while($datos = mysqli_fetch_object($rs))
	{
		$body += '				<h1>Productos</h1>
								<img src="imagen.php?idD='.$datos->idProducto.'" style="width:150px;height:100px;" alt="">
								<h2>'.$datos -> nombreProducto.'</h2>
								<p>Cantidad: '.$datos->cantidad.'</p>
								<h2>$ '.$datos->precio.' c/u </h2>';
		$Total += $datos->subTotal;
	}										
								
	$body += '					<h2>Total: '.$Total.'</h2>
						    </div>
							<h1>Pago confirmado</h1>
							<h1>Gracias por su preferencia.</h1>
						</div>
					</body>
				</html>';
?>