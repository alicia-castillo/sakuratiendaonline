<?php

//verificacion del idP
if(isset($_GET['idP']) && $_GET['idP']!="")
{


	//Coneccion a la BD
	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn)
	{
		echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}

	$qry = "SELECT * FROM producto where idProducto=".$_GET['idP'];
	$rs = mysqli_query($conn,$qry);
	
	$datos = mysqli_fetch_object($rs);
	echo '<div class="container">
			<form action="agregaProdsCarrito.php" method="get">
				<div class="imgProd">
					<img  width="350px" heigth="400px" src="imagen.php?idD='.$datos->idProducto.'" alt="Card image cap" class="rounded"> 
				</div>
				<div class="descripcion">
					<input type="hidden" name="idP" value="'.$_GET['idP'].'">
					<h1>'.$datos->nombreProducto.'</h1>
					<h2>'.$datos->descripcion.'</h2>
					<h2>'.$datos->talla.'</h2>
					<h2> $'.$datos->precio.' MX</h2>
					<button class="btn btn-primary" role="submit">Agregar Carrito</button>
				</div>
			</form>
		</div>';
	}
?>