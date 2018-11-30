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
				echo ' <div class="container" id="cards">
						<form>
							<div class="imgProd">
								<img  width="220px" heigth="150px" src="imagen.php?idD='.$datos->idProducto.'" alt="" class="rounded"> 
							</div>
							<div class="descripcion">
								<h1>'.$datos->nombreProducto.'</h1>
								<h2 class="font-weight-bold">$ '.$datos->precio.'</h2>
							<a href="producto.php?idP='.$datos->idProducto.'" class="btn btn-primary" role="button" aria-pressed="true">Ver mas</a>
							</div>
						</form>
					</div>';
			}
		}
?>