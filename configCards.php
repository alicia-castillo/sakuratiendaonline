<?php

	//Coneccion a la BD
	$conn = mysqli_connect("localhost","root","mysql","Proyecto");
	if(!$conn)
	{
		echo "No fue posible conectarse a la BD" . mysqli_error($conn);
	}

	$qry = "SELECT p.*,c.nombreCategoria FROM producto p inner join categoria c on p.idCategoria = c.idCategoria";
	$rs = mysqli_query($conn,$qry);
	
while($datos = mysqli_fetch_object($rs))
{
	if((isset($_POST['opcion']) &&  ($_POST['opcion'] == $datos->nombreCategoria || $_POST['opcion'] == 'Todo')) || !isset($_POST['opcion']))
	{
		echo '<div class="container" id="cards" >
				<form method="post" action="imagen.php" enctype="multipart/form-data">
					<div class="imgProducto">
						<img  width="200px" heigth="200px" src="imagen.php?idD='.$datos->idProducto.'" alt=""> 
					</div>
					<div class="descripcion">
						<h1>Producto: '.$datos->nombreProducto.'</h1>
						<h2>'.$datos->descripcion.'</h2>
						<h2>Existencias: '.$datos->existencia.'</h2>
						<div class="botones">
							<form method="get" action="obtenProducto.php?idP='.$datos->idProducto.'" name="boton">
								<a href="modificaProd.php?idP='.$datos->idProducto.'" class="btn btn-dark" role="button" aria-pressed="true">Editar</a>
								<button type="submit" class="btn btn-dark">Eliminar</button>
							</form>
						</div>
					</div>
				</form>
			</div>';
		}
	}
?>
